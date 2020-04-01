<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\DuBaoSauBenh;
use App\VungNguyenLieu;
use App\MuaVu;
use App\SauBenh;
use Illuminate\Http\Request;
use App\Http\Requests\DuBaoSauBenhRequest;
use Illuminate\Support\Facades\Auth;
class DuBaoSauBenhController extends Controller
{
	public function getIndex()
	{
			return DuBaoSauBenh::all();
	}

	public function getIndexAdmin()
	{
		return view('admin.dubaosaubenh_index',['dsDuBaoSauBenh'=> self::getIndex()]);
	}
	public function getIndexManager()
	{
		return view('manager.dubaosaubenh_index',['dsDuBaoSauBenh'=> self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.dubaosaubenh_index',['dsDuBaoSauBenh'=> self::getIndex()]);
	}

	public function getIndexFarmer()
	{
		return view('farmer.dubaosaubenh_index',['dsDuBaoSauBenh'=> self::getIndex()]);
	}


	public function getCreateAdmin()
	{
		$dsVungNguyenLieu=VungNguyenLieu::all();
		$dsSauBenh=SauBenh::all();
		$dsMuaVu = MuaVu::all();
		return view('admin.dubaosaubenh_create',['dsVungNguyenLieu' => $dsVungNguyenLieu,'dsSauBenh'=>$dsSauBenh,'dsMuaVu'=>$dsMuaVu]);
	}

	public function getCreateOfficer()
	{
		$dsVungNguyenLieu=VungNguyenLieu::all();
		$dsSauBenh=SauBenh::all();
		$dsMuaVu = MuaVu::all();
		return view('admin.dubaosaubenh_create',['dsVungNguyenLieu' => $dsVungNguyenLieu,'dsSauBenh'=>$dsSauBenh,'dsMuaVu'=>$dsMuaVu]);
	}
	

	public function postCreate(Request $request)
	{
		try {
			$duBaoSauBenh = new DuBaoSauBenh();
			$duBaoSauBenh->saubenh_id = $request->saubenh_id;
			$duBaoSauBenh->vungnguyenlieu_id = $request->vungnguyenlieu_id;
			$duBaoSauBenh->muavu_id = $request->muavu_id;
			// chưa làm đăng nhập... xảy ra lỗi
			$duBaoSauBenh->nguoidung_id = Auth::id();
			$duBaoSauBenh->thongtindubao = $request->thongtindubao;
			$duBaoSauBenh->ghichu = $request->ghichu;
			//$duBaoSauBenh->nguoidung_id = $request->nguoidung_id;
			$duBaoSauBenh->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postCreateAdmin(DuBaoSauBenhRequest $request)
	{
	$results = self::postCreate($request);
	return $results['result'] ? redirect()->route('admin.dubaosaubenh.index')->with($results) : redirect()->back()->withInput()->with($results);
	}


	public function postCreateOfficer(DuBaoSauBenhRequest $request)
	{
	$results = self::postCreate($request);
	return $results['result'] ? redirect()->route('officer.dubaosaubenh.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getEditAdmin($id)
	{
		$dsVungNguyenLieu=VungNguyenLieu::all();
		$dsSauBenh=SauBenh::all();
		$dsMuaVu = MuaVu::all();
		return view('admin.dubaosaubenh_edit', ['duBaoSauBenh' => DuBaoSauBenh::findOrFail($id),'dsVungNguyenLieu' => $dsVungNguyenLieu,'dsSauBenh'=>$dsSauBenh,'dsMuaVu'=>$dsMuaVu]);
	}
	public function getEditOfficer($id)
	{
		$dsVungNguyenLieu=VungNguyenLieu::all();
		$dsSauBenh=SauBenh::all();
		$dsMuaVu = MuaVu::all();
		return view('admin.dubaosaubenh_edit', ['duBaoSauBenh' => DuBaoSauBenh::findOrFail($id),'dsVungNguyenLieu' => $dsVungNguyenLieu,'dsSauBenh'=>$dsSauBenh,'dsMuaVu'=>$dsMuaVu]);
	}
	
	public function postEdit(DuBaoSauBenhRequest $request)
	{
		$duBaoSauBenh = DuBaoSauBenh::findOrFail($request->dubaosaubenhid);
		try {
			$duBaoSauBenh->saubenh_id = $request->saubenh_id;
			$duBaoSauBenh->vungnguyenlieu_id = $request->vungnguyenlieu_id;
			$duBaoSauBenh->muavu_id = $request->muavu_id;
			$duBaoSauBenh->thongtindubao = $request->thongtindubao;
			$duBaoSauBenh->ghichu = $request->ghichu;
			//$duBaoSauBenh->nguoidung_id = $request->nguoidung_id;
			$duBaoSauBenh->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	public function postEditAdmin(DuBaoSauBenhRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.dubaosaubenh.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditOfficer(DuBaoSauBenhRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.dubaosaubenh.index')->with($results) : redirect()->back()->withInput()->with($results);
	}


	public function postDelete($id)
	{
		try {
			DuBaoSauBenh::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteAdmin($id)
		{
			$results = self::postDelete($id);
			return $results['result'] ? redirect()->route('admin.dubaosaubenh.index')->with($results) : redirect()->back()->withInput()->with($results);
		}
		public function postDeleteOfficer($id)
		{
			$results = self::postDelete($id);
			return $results['result'] ? redirect()->route('officer.dubaosaubenh.index')->with($results) : redirect()->back()->withInput()->with($results);
		}


}
