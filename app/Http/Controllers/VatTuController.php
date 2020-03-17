<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\VatTu;
use Illuminate\Http\Request;
use App\LoaiVatTu;
use App\HopTacXa;

class VatTuController extends Controller
{
	public function getIndex()
	{
		return view('farmer.vattu_index', ['dsVatTu' => VatTu::all()]);
	}
	
	public function getCreate()
	{
		$dsLoaiVatTu = LoaiVatTu::all();
		$dsHopTacXa = HopTacXa::all();
   		return view('farmer.vattu_create', compact('dsLoaiVatTu','dsHopTacXa'));
	}
	
	public function postCreate(Request $request)
	{
		try {
			$vatTu = new VatTu();
			$vatTu->loaivattu_id = $request->loaivattu_id;
			$vatTu->hoptacxa_id = $request->hoptacxa_id;
			$vatTu->solo = $request->solo;
			$vatTu->tenvattu = $request->tenvattu;
			$vatTu->loai = $request->loai;
			$vatTu->donvitinh = $request->donvitinh;
			$vatTu->ngaynhap = $request->ngaynhap;
			$vatTu->soluong = $request->soluong;
			$vatTu->dongianhap = $request->dongianhap;
			$vatTu->save();
			return redirect()->route('farmer.vattu.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
		return view('farmer.vattu_index', ['dsVatTu' => VatTu::all()]);
	}
	
	public function getEdit($id)
	{
		return view('farmer.vattu_edit', ['vatTu' => VatTu::findOrFail($id)]);
	}
	
	public function postEdit(Request $request)
	{		
		$vatTu = VatTu::findOrFail($request->vattuid);
		try {
			$vatTu->loaivattu_id = $request->loaivattu_id;
			$vatTu->hoptacxa_id = $request->hoptacxa_id;
			$vatTu->solo = $request->solo;
			$vatTu->tenvattu = $request->tenvattu;
			$vatTu->loai = $request->loai;
			$vatTu->donvitinh = $request->donvitinh;
			$vatTu->ngaynhap = $request->ngaynhap;
			$vatTu->soluong = $request->soluong;
			$vatTu->dongianhap = $request->dongianhap;
			$vatTu->save();
			return redirect()->route('farmer.vattu.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
	
	public function getDelete($id)
	{
		
	}	
	public function postDelete($id)
	{
		try {
			VatTu::destroy($id);
			return redirect()->route('farmer.vattu.index')->with(['result' => True, 'message' => "Xóa thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
}
