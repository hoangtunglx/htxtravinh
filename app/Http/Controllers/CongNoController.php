<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\NguoiDung;
use App\DonHang;
use App\DonThue;
use App\MuaVu;
use App\CongNo;
use Illuminate\Http\Request;
use App\Http\Requests\CongNoRequest;

class CongNoController extends Controller
{
	public function getIndex()
	{
		return CongNo::all();
	}

	public function getIndexAdmin()
	{
		return view('admin.congno_index', ['dsCongNo' => self::getIndex()]);
	}

	public function getIndexManager()
	{
		return view('manager.congno_index', ['dsCongNo' => self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.congno_index', ['dsCongNo' => self::getIndex()]);
	}

	public function getIndexFarmer()
	{
		return view('farmer.congno_index', ['dsCongNo' => self::getIndex()]);
	}

	public function getCreateOfficer()
	{
		
		return view('officer.congno_create', ['dsNguoiDung' => NguoiDung::all(), 'dsDonHang' => DonHang::all(), 'dsDonThue' => DonThue::all(), 'dsMuaVu' => MuaVu::all() ]);
	}
	public function postCreate(CongNoRequest $request)
	{
		try {
			$congNo = new CongNo();
			$congNo->nguoidung_id = $request->nguoidung_id;
			$congNo->donhang_id = $request->donhang_id;
			$congNo->donthue_id = $request->donthue_id;
			$congNo->muavu_id = $request->muavu_id;
			$congNo->sotienconno = $request->sotienconno;
			$congNo->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	
	public function postCreateOfficer(CongNoRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.congno.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getEditOfficer($id)
	{
		return view('officer.congno_edit', ['congNo' => CongNo::findOrFail($id), 'dsNguoiDung' => NguoiDung::all(), 'dsDonHang' => DonHang::all(), 'dsDonThue' => DonThue::all(), 'dsMuaVu' => MuaVu::all()]);
	}

	public function postEdit(CongNoRequest $request)
	{
		$congNo = CongNo::findOrFail($request->congnoid);
		try {

			$congNo->nguoidung_id = $request->nguoidung_id;
			$congNo->donhang_id = $request->donhang_id;
			$congNo->donthue_id = $request->donthue_id;
			$congNo->muavu_id = $request->muavu_id;
			$congNo->sotienconno = $request->sotienconno;
			$congNo->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postEditOfficer(CongNoRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.congno.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getDelete($id)
	{
		//
	}

	public function postDelete($id)
	{
		try {
			CongNo::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.congno.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
}