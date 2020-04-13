<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;
use App\ThongTinMoiTruong;
use App\ThongTinThoiTiet;
use App\GoiYPhanBonNuocTuoi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\GoiYPhanBonNuocTuoiRequest;
class GoiYPhanBonNuocTuoiController extends Controller
{
	public function getIndex()
	{
		return GoiYPhanBonNuocTuoi::all();
	}

	public function getIndexAdmin()
	{
		
		return view('admin.goiyphanbonnuoctuoi_index',['dsGoiYPhanBonNuocTuoi'=> self::getIndex()]);
	}
	public function getIndexManager()
	{
		return view('manager.goiyphanbonnuoctuoi_index',['dsGoiYPhanBonNuocTuoi'=> self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.goiyphanbonnuoctuoi_index',['dsGoiYPhanBonNuocTuoi'=> self::getIndex()]);
	}

	public function getIndexFarmer()
	{
		return view('farmer.goiyphanbonnuoctuoi_index',['dsGoiYPhanBonNuocTuoi'=> self::getIndex()]);
	}
	public function getCreateAdmin()
	{

		$dsThongTinMoiTruong=ThongTinMoiTruong::all();
		$dsThongTinThoiTiet = ThongTinThoiTiet::all();
		return view('admin.goiyphanbonnuoctuoi_create',['dsThongTinMoiTruong' => $dsThongTinMoiTruong,'dsThongTinThoiTiet'=>$dsThongTinThoiTiet]);
	}
public function getCreateOfficer()
	{
		return view('officer.goiyphanbonnuoctuoi_create');
	}


	public function postCreate(Request $request)
	{
		try {
			$goiYPhanBonNuocTuoi = new GoiYPhanBonNuocTuoi();
			$goiYPhanBonNuocTuoi->thongtinmoitruong_id = $request->thongtinmoitruong_id;
			$goiYPhanBonNuocTuoi->thongtinthoitiet_id = $request->thongtinthoitiet_id;
			// chưa tạo đăng nhập--> lỗi	
			$goiYPhanBonNuocTuoi->nguoidung_id = Auth::id();
		//	$goiYPhanBonNuocTuoi->tieude = $request->tieude;
			$goiYPhanBonNuocTuoi->thongtingoiy = $request->thongtingoiy;
			$goiYPhanBonNuocTuoi->ghichu = $request->ghichu;
		//	$goiYPhanBonNuocTuoi->nguoidung_id = $request->nguoidung_id;
			$goiYPhanBonNuocTuoi->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}


		public function postCreateAdmin(GoiYPhanBonNuocTuoiRequest $request)
		{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.goiyphanbonnuoctuoi.index')->with($results) : redirect()->back()->withInput()->with($results);
		}
		


		public function postCreateOfficer(GoiYPhanBonNuocTuoiRequest $request)
		{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.goiyphanbonnuoctuoi.index')->with($results) : redirect()->back()->withInput()->with($results);
		}


		public function getEditAdmin($id)
		{
			$dsThongTinMoiTruong=ThongTinMoiTruong::all();
			$dsThongTinThoiTiet = ThongTinThoiTiet::all();
			return view('admin.goiyphanbonnuoctuoi_edit', ['goiYPhanBonNuocTuoi' => GoiYPhanBonNuocTuoi::findOrFail($id),'dsThongTinMoiTruong' => $dsThongTinMoiTruong,'dsThongTinThoiTiet'=>$dsThongTinThoiTiet]);
		}
		public function getEditOfficer($id)
		{
			return view('officer.goiyphanbonnuoctuoi_edit', ['goiYPhanBonNuocTuoi' => GoiYPhanBonNuocTuoi::findOrFail($id)]);
		}



	public function postEdit(Request $request)
	{
		$goiYPhanBonNuocTuoi = GoiYPhanBonNuocTuoi::findOrFail($request->goiyphanbonnuoctuoiid);
		try {
		//	$goiYPhanBonNuocTuoi->tieude = $request->tieude;
		//	$goiYPhanBonNuocTuoi->thongtinmoitruong_id = $request->thongtinmoitruong_id;
		//	$goiYPhanBonNuocTuoi->thongtinthoitiet_id = $request->thongtinthoitiet_id;
			$goiYPhanBonNuocTuoi->thongtingoiy = $request->thongtingoiy;
			$goiYPhanBonNuocTuoi->ghichu = $request->ghichu;
			$goiYPhanBonNuocTuoi->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	public function postEditAdmin(GoiYPhanBonNuocTuoiRequest $request)
	{

		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.goiyphanbonnuoctuoi.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditOfficer(GoiYPhanBonNuocTuoiRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.goiyphanbonnuoctuoi.index')->with($results) : redirect()->back()->withInput()->with($results);
	}


public function postDelete($id)
	{
		try {
			GoiYPhanBonNuocTuoi::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}



public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.goiyphanbonnuoctuoi.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.goiyphanbonnuoctuoi.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
}
