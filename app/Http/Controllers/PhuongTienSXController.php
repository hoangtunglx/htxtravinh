<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\HopTacXa;
use App\LoaiPhuongTien;
use App\PhuongTienSX;
use Illuminate\Http\Request;
use App\Http\Requests\PhuongTienSXRequest;

class PhuongTienSXController extends Controller
{
	public function getIndex()
	{
		return PhuongTienSX::all();
	}

	public function getIndexAdmin()
	{
		return view('admin.phuongtiensx_index', ['dsPhuongTienSX' => self::getIndex()]);
	}

	public function getIndexManager()
	{
		return view('manager.phuongtiensx_index', ['dsPhuongTienSX' => self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.phuongtiensx_index', ['dsPhuongTienSX' => self::getIndex()]);
	}

	public function getIndexFarmer()
	{
		return view('farmer.phuongtiensx_index', ['dsPhuongTienSX' => self::getIndex()]);
	}

	public function getCreateOfficer()
	{
		
		return view('officer.phuongtiensx_create', ['dsLoaiPhuongTien' => LoaiPhuongTien::all(), 'dsHopTacXa' => HopTacXa::all()]);
	}
	public function postCreate(PhuongTienSXRequest $request)
	{
		try {
			$phuongTienSX = new PhuongTienSX();
			$phuongTienSX->hoptacxa_id = $request->hoptacxa_id;
			$phuongTienSX->loaiphuongtien_id = $request->loaiphuongtien_id;
			$phuongTienSX->masophuongtien = $request->masophuongtien;
			$phuongTienSX->tenphuongtien = $request->tenphuongtien;
			$phuongTienSX->ngaymua = $request->ngaymua;
			$phuongTienSX->nhasanxuat = $request->nhasanxuat;
			$phuongTienSX->namsanxuat = $request->namsanxuat;
			$phuongTienSX->nuocsanxuat = $request->nuocsanxuat;
			$phuongTienSX->dientich = $request->dientich;
			$phuongTienSX->vitri = $request->vitri;
			$phuongTienSX->mota = $request->mota;
			$phuongTienSX->trangthai = $request->trangthai;
			$phuongTienSX->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	
	public function postCreateOfficer(PhuongTienSXRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.phuongtiensx.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getEditOfficer($id)
	{
		return view('officer.phuongtiensx_edit', ['phuongTienSX' => PhuongTienSX::findOrFail($id), 'dsLoaiPhuongTien' => LoaiPhuongTien::all(), 'dsHopTacXa' => HopTacXa::all()]);
	}

	public function postEdit(PhuongTienSXRequest $request)
	{
		$phuongTienSX = PhuongTienSX::findOrFail($request->phuongtiensxid);
		try {
			
			$phuongTienSX->hoptacxa_id = $request->hoptacxa_id;
			$phuongTienSX->loaiphuongtien_id = $request->loaiphuongtien_id;
			$phuongTienSX->masophuongtien = $request->masophuongtien;
			$phuongTienSX->tenphuongtien = $request->tenphuongtien;
			$phuongTienSX->ngaymua = $request->ngaymua;
			$phuongTienSX->nhasanxuat = $request->nhasanxuat;
			$phuongTienSX->namsanxuat = $request->namsanxuat;
			$phuongTienSX->nuocsanxuat = $request->nuocsanxuat;
			$phuongTienSX->dientich = $request->dientich;
			$phuongTienSX->vitri = $request->vitri;
			$phuongTienSX->mota = $request->mota;
			$phuongTienSX->trangthai = $request->trangthai;
			$phuongTienSX->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postEditOfficer(PhuongTienSXRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.phuongtiensx.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getDelete($id)
	{
		//
	}

	public function postDelete($id)
	{
		try {
			PhuongTienSX::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.phuongtiensx.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
}