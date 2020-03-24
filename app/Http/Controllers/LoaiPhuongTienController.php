<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\LoaiPhuongTien;
use Illuminate\Http\Request;
use App\Http\Requests\LoaiPhuongTienRequest;

class LoaiPhuongTienController extends Controller
{
	public function getIndex()
	{
		return LoaiPhuongTien::all();
	}

	public function getIndexAdmin()
	{
		return view('admin.loaiphuongtien_index', ['dsLoaiPhuongTien' => self::getIndex()]);
	}

	public function getIndexManager()
	{
		return view('manager.loaiphuongtien_index', ['dsLoaiPhuongTien' => self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.loaiphuongtien_index', ['dsLoaiPhuongTien' => self::getIndex()]);
	}

	public function getIndexFarmer()
	{
		return view('farmer.loaiphuongtien_index', ['dsLoaiPhuongTien' => self::getIndex()]);
	}

	public function getCreateAdmin()
	{
		return view('admin.loaiphuongtien_create');
	}
	public function getCreateOfficer()
	{
		return view('officer.loaiphuongtien_create');
	}
	public function postCreate(LoaiPhuongTienRequest $request)
	{
		try {
			$loaiPhuongTien = new LoaiPhuongTien();
			$loaiPhuongTien->tenloaiphuongtien = $request->tenloaiphuongtien;
			$loaiPhuongTien->mota = $request->mota;
			$loaiPhuongTien->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postCreateAdmin(LoaiPhuongTienRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.loaiphuongtien.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateOfficer(LoaiPhuongTienRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.loaiphuongtien.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getEditAdmin($id)
	{
		return view('admin.loaiphuongtien_edit', ['loaiPhuongTien' => LoaiPhuongTien::findOrFail($id)]);
	}

	public function getEditOfficer($id)
	{
		return view('officer.loaiphuongtien_edit', ['loaiPhuongTien' => LoaiPhuongTien::findOrFail($id)]);
	}

	public function postEdit(LoaiPhuongTienRequest $request)
	{
		$loaiPhuongTien = LoaiPhuongTien::findOrFail($request->loaiphuongtienid);
		try {
			$loaiPhuongTien->tenloaiphuongtien = $request->tenloaiphuongtien;
			$loaiPhuongTien->mota = $request->mota;
			$loaiPhuongTien->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postEditAdmin(LoaiPhuongTienRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.loaiphuongtien.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditOfficer(LoaiPhuongTienRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.loaiphuongtien.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getDelete($id)
	{
		//
	}

	public function postDelete($id)
	{
		try {
			loaiphuongtien::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.loaiphuongtien.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.loaiphuongtien.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
}