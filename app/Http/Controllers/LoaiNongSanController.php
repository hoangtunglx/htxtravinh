<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\LoaiNongSan;
use Illuminate\Http\Request;
use App\Http\Requests\LoaiNongSanRequest;


class LoaiNongSanController extends Controller
{
	public function getIndex()
	{
		return LoaiNongSan::all();
	}

	public function getIndexAdmin()
	{
		return view('admin.loainongsan_index', ['dsLoaiNongSan' => self::getIndex()]);
	}

	public function getIndexManager()
	{
		return view('manager.loainongsan_index', ['dsLoaiNongSan' => self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.loainongsan_index', ['dsLoaiNongSan' => self::getIndex()]);
	}

	public function getIndexFarmer()
	{
		return view('farmer.loainongsan_index', ['dsLoaiNongSan' => self::getIndex()]);
	}

	public function getCreateAdmin()
	{
		return view('admin.loainongsan_create');
	}
	public function getCreateOfficer()
	{
		return view('officer.loainongsan_create');
	}
	public function postCreate(LoaiNongSanRequest $request)
	{
		try {
			$loaiNongSan = new LoaiNongSan();
			$loaiNongSan->tenloainongsan = $request->tenloainongsan;
			$loaiNongSan->mota = $request->mota;
			$loaiNongSan->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postCreateAdmin(LoaiNongSanRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.loainongsan.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateOfficer(LoaiNongSanRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.loainongsan.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getEditAdmin($id)
	{
		return view('admin.loainongsan_edit', ['loaiNongSan' => loaiNongSan::findOrFail($id)]);
	}

	public function getEditOfficer($id)
	{
		return view('officer.loainongsan_edit', ['loaiNongSan' => loaiNongSan::findOrFail($id)]);
	}

	public function postEdit(LoaiNongSanRequest $request)
	{
		$loaiNongSan = LoaiNongSan::findOrFail($request->loainongsanid);
		try {
			$loaiNongSan->tenloainongsan = $request->tenloainongsan;
			$loaiNongSan->mota = $request->mota;
			$loaiNongSan->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postEditAdmin(LoaiNongSanRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.loainongsan.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditOfficer(LoaiNongSanRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.loainongsan.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getDelete($id)
	{
		//
	}

	public function postDelete($id)
	{
		try {
			LoaiNongSan::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.loainongsan.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.loainongsan.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
}
