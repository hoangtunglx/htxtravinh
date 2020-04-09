<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\ThuaDat;
use App\NguoiDung;
use Illuminate\Http\Request;
use App\Http\Requests\ThuaDatRequest;

class ThuaDatController extends Controller
{
	public function getIndex()
	{
		return ThuaDat::all();
	}
	public function getIndexAdmin()
	{
		return view('admin.thuadat_index', ['dsThuaDat' => self::getIndex()]);
	}
	public function getIndexManager()
	{
		return view('manager.thuadat_index', ['dsThuaDat' => self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.thuadat_index', ['dsThuaDat' => self::getIndex()]);
	}
	
	public function getIndexFarmer()
	{
		return view('farmer.thuadat_index', ['dsThuaDat' => self::getIndex()]);
	}
	
	public function getCreateAdmin()
	{
		return view('admin.thuadat_create', ['dsNguoiDung' => NguoiDung::all()]);
	}
	

	
	public function getCreateOfficer()
	{
		return view('officer.thuadat_create', ['dsNguoiDung' => NguoiDung::all()]);
	}
	
	
	public function postCreate(ThuaDatRequest $request)
	{
		try {
			$thuaDat = new ThuaDat();
			$thuaDat->nguoidung_id = $request->nguoidung_id;
			$thuaDat->tenthuadat = $request->tenthuadat;
			$thuaDat->tobando = $request->tobando;
			$thuaDat->vitri = $request->vitri;
			$thuaDat->dientich = $request->dientich;
			$thuaDat->dacdiemthonhuong = $request->dacdiemthonhuong;
			$thuaDat->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postCreateAdmin(ThuaDatRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.thuadat.index')->with($results) : redirect()->back()->withInput()->with($results);
	}	
	
	
	public function postCreateOfficer(ThuaDatRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.thuadat.index')->with($results) : redirect()->back()->withInput()->with($results);
	}	
		
	public function postEdit(ThuaDatRequest $request)
	{
		$thuaDat = ThuaDat::findOrFail($request->thuadatid);
		try {
			$thuaDat->nguoidung_id = $request->nguoidung_id;
			$thuaDat->tenthuadat = $request->tenthuadat;
			$thuaDat->tobando = $request->tobando;
			$thuaDat->vitri = $request->vitri;
			$thuaDat->dientich = $request->dientich;
			$thuaDat->dacdiemthonhuong = $request->dacdiemthonhuong;
			
			$thuaDat->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postEditAdmin(ThuaDatRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.thuadat.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditFarmer(ThuaDatRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('farmer.thuadat.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditOfficer(ThuaDatRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.thuadat.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function getEditAdmin($id)
	{
		return view('admin.thuadat_edit', ['thuaDat' => ThuaDat::findOrFail($id),'nguoiDung' => NguoiDung::all()]);
	}
	
	public function getEditFarmer($id)
	{
		return view('farmer.thuaDat_edit', ['thuaDat' => ThuaDat::findOrFail($id),'nguoiDung' => NguoiDung::all()]);
	}
	
	public function getEditOfficer($id)
	{
		return view('officer.thuaDat_edit', ['thuaDat' => ThuaDat::findOrFail($id), 'nguoiDung' => NguoiDung::all()]);
	}
	
	
	public function getDelete($id)
	{
		//
	}
	
	public function postDelete($id)
	{
		try {
			ThuaDat::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.thuadat.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteManager($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('manager.thuaDat.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.thuaDat.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
}