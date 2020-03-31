<?php

/**
 * Người thực hiện	: Họ Và Tên				
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\NguoiDung;
use App\HopTacXa;
use App\ChinhSachNongNghiep;
use Illuminate\Http\Request;
use App\Http\Requests\ChinhSachNongNghiepRequest;
use Input,File;
use Illuminate\Http\Response;

class ChinhSachNongNghiepController extends Controller
{
	public function getIndex()
	{
		return ChinhSachNongNghiep::all();
	}

	public function getIndexAdmin()
	{
		return view('admin.chinhsachnongnghiep_index', ['dsChinhSachNongNghiep' => self::getIndex()]);
	}

	public function getIndexManager()
	{
		return view('manager.chinhsachnongnghiep_index', ['dsChinhSachNongNghiep' => self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.chinhsachnongnghiep_index', ['dsChinhSachNongNghiep' => self::getIndex()]);
	}

	public function getIndexFarmer()
	{
		return view('farmer.chinhsachnongnghiep_index', ['dsChinhSachNongNghiep' => self::getIndex()]);
	}

	public function getCreateAdmin()
	{
		
		return view('admin.chinhsachnongnghiep_create', ['dsHopTacXa' => HopTacXa::all(), 'dsNguoiDung' => NguoiDung::all()]);
	}
	public function getCreateOfficer()
	{
		
		return view('officer.chinhsachnongnghiep_create', ['dsHopTacXa' => HopTacXa::all(), 'dsNguoiDung' => NguoiDung::all()]);
	}
	public function postCreate(ChinhSachNongNghiepRequest $request)
	{
		try {
			$chinhSachNongNghiep = new ChinhSachNongNghiep();
			$chinhSachNongNghiep->hoptacxa_id = $request->hoptacxa_id;
			$chinhSachNongNghiep->tenchinhsach = $request->tenchinhsach;
			$chinhSachNongNghiep->mota = $request->mota;

			$fileName = $request->file('taptin')->getClientOriginalName();
			$chinhSachNongNghiep->taptin =  $fileName;
 			$request->file('taptin')->move('public/upload/', $fileName);

			$chinhSachNongNghiep->nguoidung_id = $request->nguoidung_id;
			$chinhSachNongNghiep->sovanban = $request->sovanban;
			$chinhSachNongNghiep->tomtatnoidung = $request->tomtatnoidung;

			$chinhSachNongNghiep->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postCreateAdmin(ChinhSachNongNghiepRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.chinhsachnongnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateOfficer(ChinhSachNongNghiepRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.chinhsachnongnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getEditAdmin($id)
	{
		return view('admin.chinhsachnongnghiep_edit', ['chinhSachNongNghiep' => ChinhSachNongNghiep::findOrFail($id), 'dsHopTacXa' => HopTacXa::all(), 'dsNguoiDung' => NguoiDung::all()]);
	}

	public function getEditOfficer($id)
	{
		return view('officer.chinhsachnongnghiep_edit', ['chinhSachNongNghiep' => ChinhSachNongNghiep::findOrFail($id), 'dsHopTacXa' => HopTacXa::all(), 'dsNguoiDung' => NguoiDung::all()]);
	}

	public function postEdit(ChinhSachNongNghiepRequest $request)
	{
		$chinhSachNongNghiep = ChinhSachNongNghiep::findOrFail($request->chinhsachnongnghiepid);
		try {
			$chinhSachNongNghiep->hoptacxa_id = $request->hoptacxa_id;
			$chinhSachNongNghiep->tenchinhsach = $request->tenchinhsach;
			$chinhSachNongNghiep->mota = $request->mota;

			$fileName = $request->file('taptin')->getClientOriginalName();
			$chinhSachNongNghiep->taptin =  $fileName;
 			$request->file('taptin')->move('public/upload/');

			$chinhSachNongNghiep->nguoidung_id = $request->nguoidung_id;
			$chinhSachNongNghiep->sovanban = $request->sovanban;
			$chinhSachNongNghiep->tomtatnoidung = $request->tomtatnoidung;
			$chinhSachNongNghiep->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postEditAdmin(ChinhSachNongNghiepRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.chinhsachnongnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditOfficer(ChinhSachNongNghiepRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.chinhsachnongnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getDelete($id)
	{
		//
	}

	public function postDelete($id)
	{
		try {
			ChinhSachNongNghiep::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.chinhsachnongnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.chinhsachnongnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	public function download($file_name)
    {
	    $file_path = public_path('upload/'.$file_name);
	    return response()->download($file_path);
    }

 
    public function xemFile($file_name)
    {
	    $file_path = public_path('upload/'.$file_name);
	    return response()->file($file_path);
    }
}