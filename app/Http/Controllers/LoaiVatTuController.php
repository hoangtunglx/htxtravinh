<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\LoaiVatTu;
use Illuminate\Http\Request;

class LoaiVatTuController extends Controller
{
	public function getIndex()
	{
		return view('farmer.loaivattu_index', ['dsLoaiVatTu' => LoaiVatTu::all()]);
	}
	
	public function getCreate()
	{
		return view('farmer.loaivattu_create');
	}
	
	public function postCreate(Request $request)
	{
		try {
			$loaiVatTu = new LoaiVatTu();
			$loaiVatTu->tenloaivattu = $request->tenloaivattu;
			$loaiVatTu->mota = $request->mota;
			$loaiVatTu->save();
			return redirect()->route('farmer.loaivattu.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
	
	public function getEdit($id)
	{
		return view('farmer.loaivattu_edit', ['loaiVatTu' => LoaiVatTu::findOrFail($id)]);
	}
	
	public function postEdit(Request $request)
	{
		$loaiVatTu = LoaiVatTu::findOrFail($request->loaivattuid);
		try {
			$loaiVatTu->tenloaivattu = $request->tenloaivattu;
			$loaiVatTu->mota = $request->mota;
			$loaiVatTu->save();
			return redirect()->route('farmer.loaivattu.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
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
			LoaiVatTu::destroy($id);
			return redirect()->route('farmer.loaivattu.index')->with(['result' => True, 'message' => "Xóa thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
}
