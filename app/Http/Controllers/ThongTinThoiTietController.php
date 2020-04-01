<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\ThongTinThoiTiet;
use App\VungNguyenLieu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ThongTinThoiTietRequest;
class ThongTinThoiTietController extends Controller
{
	public function getIndex()
	{
		return ThongTinThoiTiet::all();
	}
	public function getIndexAdmin()
	{
		return view('admin.thongtinthoitiet_index',['dsThongTinThoiTiet'=> self::getIndex()]);
	}
	public function getIndexManager()
	{
		return view('manager.thongtinthoitiet_index',['dsThongTinThoiTiet'=> self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.thongtinthoitiet_index',['dsThongTinThoiTiet'=> self::getIndex()]);
	}

	public function getIndexFarmer()
	{
		return view('farmer.thongtinthoitiet_index',['dsThongTinThoiTiet'=> self::getIndex()]);
	}

// getCreate Admin, Officer
	public function getCreateAdmin()
	{
	 $dsVungNguyenLieu = VungNguyenLieu::all();
		return view('admin.thongtinthoitiet_create',['dsVungNguyenLieu' => $dsVungNguyenLieu]);
	}


	public function getCreateOfficer()
	{
		$dsVungNguyenLieu = VungNguyenLieu::all();
 		return view('admin.thongtinthoitiet_create',['dsVungNguyenLieu' => $dsVungNguyenLieu]);
	}

	public function postCreate(Request $request)
	{
		try{
			$thongTinThoiTiet = new ThongTinThoiTiet();
			// chưa tạo đăng nhập => lỗi
			$thongTinThoiTiet->nguoidung_id = Auth::id();
			$thongTinThoiTiet->vungnguyenlieu_id = $request->vungnguyenlieu_id;
			$thongTinThoiTiet->luongmua = $request->luongmua;
			$thongTinThoiTiet->sucgio = $request->sucgio;
			$thongTinThoiTiet->huonggio = $request->huonggio;
			$thongTinThoiTiet->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	public function postCreateAdmin(ThongTinThoiTietRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.thongtinthoitiet.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateOfficer(ThongTinThoiTietRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.thongtinthoitiet.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getEditAdmin($id)
	{
		 $dsVungNguyenLieu = VungNguyenLieu::all();
		return view('admin.thongtinthoitiet_edit', ['thongTinThoiTiet' => thongTinThoiTiet::findOrFail($id),'dsVungNguyenLieu' => $dsVungNguyenLieu]);;
	}
	public function getEditOfficer($id)
	{
		$dsVungNguyenLieu = VungNguyenLieu::all();
		return view('officer.thongtinthoitiet_edit', ['thongTinThoiTiet' => thongTinThoiTiet::findOrFail($id),'dsVungNguyenLieu' => $dsVungNguyenLieu]);
	}

	public function postEdit(Request $request)
	{
		$thongTinThoiTiet = ThongTinThoiTiet::findOrFail($request->thongtinthoitietid);
		try {
			$thongTinThoiTiet->luongmua = $request->luongmua;
			$thongTinThoiTiet->sucgio = $request->sucgio;
			$thongTinThoiTiet->huonggio = $request->huonggio;
			$thongTinThoiTiet->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	public function postEditAdmin(ThongTinThoiTietRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.thongtinthoitiet.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	public function postEditOfficer(ThongTinThoiTietRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.thongtinthoitiet.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDelete($id)
	{
		try {
			ThongTinThoiTiet::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}



		public function postDeleteAdmin($id)
		{
			$results = self::postDelete($id);
			return $results['result'] ? redirect()->route('admin.thongtinthoitiet.index')->with($results) : redirect()->back()->withInput()->with($results);
		}

	public function postDeleteOfficer($id)
		{
			$results = self::postDelete($id);
			return $results['result'] ? redirect()->route('officer.thongtinthoitiet.index')->with($results) : redirect()->back()->withInput()->with($results);
		}
}
