<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\NongSan;
use App\ThongTinThiTruong;
use Illuminate\Http\Request;
use App\Http\Requests\ThongTinThiTruongRequest;

class ThongTinThiTruongController extends Controller
{
	public function getIndex()
	{
		return ThongTinThiTruong::all();
	}

	public function getIndexAdmin()
	{
		return view('admin.thongtinthitruong_index', ['dsThongTinThiTruong' => self::getIndex()]);
	}

	public function getIndexManager()
	{
		return view('manager.thongtinthitruong_index', ['dsThongTinThiTruong' => self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.thongtinthitruong_index', ['dsThongTinThiTruong' => self::getIndex()]);
	}

	public function getIndexFarmer()
	{
		return view('farmer.thongtinthitruong_index', ['dsThongTinThiTruong' => self::getIndex()]);
	}

	public function getCreateAdmin()
	{
		
		return view('admin.thongtinthitruong_create', ['dsNongSan' => NongSan::all()]);
	}
	public function getCreateOfficer()
	{
		
		return view('officer.thongtinthitruong_create', ['dsNongSan' => NongSan::all()]);
	}
	public function postCreate(ThongTinThiTruongRequest $request)
	{
		try {
			$thongTinThiTruong = new ThongTinThiTruong();
			$thongTinThiTruong->nongsan_id = $request->nongsan_id;
			$thongTinThiTruong->ngaycapnhat = $request->ngaycapnhat;
			$thongTinThiTruong->dongia = $request->dongia;
			$thongTinThiTruong->chinhsachkhuyenmai = $request->chinhsachkhuyenmai;
			$thongTinThiTruong->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postCreateAdmin(ThongTinThiTruongRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.thongtinthitruong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateOfficer(ThongTinThiTruongRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.thongtinthitruong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getEditAdmin($id)
	{
		return view('admin.thongtinthitruong_edit', ['thongTinThiTruong' => ThongTinThiTruong::findOrFail($id), 'dsNongSan' => NongSan::all()]);
	}

	public function getEditOfficer($id)
	{
		return view('officer.thongtinthitruong_edit', ['thongTinThiTruong' => ThongTinThiTruong::findOrFail($id), 'dsNongSan' => NongSan::all()]);
	}

	public function postEdit(ThongTinThiTruongRequest $request)
	{
		$thongTinThiTruong = ThongTinThiTruong::findOrFail($request->thongtinthitruongid);
		try {
			$thongTinThiTruong->nongsan_id = $request->nongsan_id;
			$thongTinThiTruong->ngaycapnhat = $request->ngaycapnhat;
			$thongTinThiTruong->dongia = $request->dongia;
			$thongTinThiTruong->chinhsachkhuyenmai = $request->chinhsachkhuyenmai;
			$thongTinThiTruong->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postEditAdmin(ThongTinThiTruongRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.thongtinthitruong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditOfficer(ThongTinThiTruongRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.thongtinthitruong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getDelete($id)
	{
		//
	}

	public function postDelete($id)
	{
		try {
			ThongTinThiTruong::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.thongtinthitruong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.thongtinthitruong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
}