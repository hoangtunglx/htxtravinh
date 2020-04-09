<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\KeHoachSanXuat_ThuaDat;
use App\ThuaDat;
use App\KeHoachSanXuat;
use Illuminate\Http\Request;
use App\Http\Requests\KeHoachSanXuat_ThuaDatRequest;

class KeHoachSanXuatThuaDatController extends Controller
{
	public function getIndex()
	{
		return KeHoachSanXuat_ThuaDat::all();
	}
	public function getIndexAdmin()
	{
		return view('admin.kehoachsanxuat_thuadat_index', ['dsKeHoachSanXuat_ThuaDat' => self::getIndex()]);
	}
	public function getIndexManager()
	{
		return view('manager.kehoachsanxuat_thuadat_index', ['dsKeHoachSanXuat_ThuaDat' => self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.kehoachsanxuat_thuadat_index', ['dsKeHoachSanXuat_ThuaDat' => self::getIndex()]);
	}
	
	public function getIndexFarmer()
	{
		return view('farmer.kehoachsanxuat_thuadat_index', ['dsKeHoachSanXuat_ThuaDat' => self::getIndex()]);
	}
		
	public function getCreateOfficer()
	{
		return view('officer.kehoachsanxuat_thuadat_create', ['dsKeHoachSanXuat' => KeHoachSanXuat::all(), 'dsThuaDat' => ThuaDat::all()]);
	}
	
	
	public function postCreate(KeHoachSanXuat_ThuaDatRequest $request)
	{
		try {
			$keHoachSanXuat_ThuaDat = new KeHoachSanXuat_ThuaDat();
			$keHoachSanXuat_ThuaDat->kehoachsanxuat_id = $request->kehoachsanxuat_id;
			$keHoachSanXuat_ThuaDat->thuadat_id = $request->thuadat_id;
			$keHoachSanXuat_ThuaDat->tenkehoachsanxuat_thuadat = $request->tenkehoachsanxuat_thuadat;
			$keHoachSanXuat_ThuaDat->dientich = $request->dientich;
			$keHoachSanXuat_ThuaDat->duyet = (isset( $request->duyet)) ? 1 : 0;
			$keHoachSanXuat_ThuaDat->trangthaithamgia = (isset( $request->trangthaithamgia)) ? 1 : 0;
			
			
			$keHoachSanXuat_ThuaDat->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	
	
	public function postCreateOfficer(KeHoachSanXuat_ThuaDatRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.kehoachsanxuat_thuadat.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	
	
	public function getEditOfficer($id)
	{
		return view('officer.kehoachsanxuat_thuadat_edit', ['keHoachSanXuat_ThuaDat' => KeHoachSanXuat_ThuaDat::findOrFail($id),'keHoachSanXuat' => KeHoachSanXuat::all(),'thuaDat' => ThuaDat::all()]);
	}
	public function getEditFarmer($id)
	{
		return view('farmer.kehoachsanxuat_thuadat_edit', ['keHoachSanXuat_ThuaDat' => KeHoachSanXuat_ThuaDat::findOrFail($id),'keHoachSanXuat' => KeHoachSanXuat::all(),'thuaDat' => ThuaDat::all()]);
	}
	
	
	public function postEdit(KeHoachSanXuat_ThuaDatRequest $request)
	{
		$keHoachSanXuat_ThuaDat = KeHoachSanXuat_ThuaDat::findOrFail($request->kehoachsanxuat_thuadatid);
		try {
			
			$keHoachSanXuat_ThuaDat->kehoachsanxuat_id = $request->kehoachsanxuat_id;
			$keHoachSanXuat_ThuaDat->thuadat_id = $request->thuadat_id;
			$keHoachSanXuat_ThuaDat->tenkehoachsanxuat_thuadat = $request->tenkehoachsanxuat_thuadat;
			$keHoachSanXuat_ThuaDat->dientich = $request->dientich;
			$keHoachSanXuat_ThuaDat->duyet = (isset( $request->duyet)) ? 1 : 0;
			$keHoachSanXuat_ThuaDat->trangthaithamgia = (isset( $request->trangthaithamgia)) ? 1 : 0;
			
			
			$keHoachSanXuat_ThuaDat->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	
	
	public function postEditOfficer(KeHoachSanXuat_ThuaDatRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.kehoachsanxuat_thuadat.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditFarmer(KeHoachSanXuat_ThuaDatRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('farmer.kehoachsanxuat_thuadat.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	
	public function getDelete($id)
	{
		//
	}
	
	public function postDelete($id)
	{
		try {
			KeHoachSanXuat_ThuaDat::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.kehoachsanxuat_thuadat.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
}