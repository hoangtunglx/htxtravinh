<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\ThuocBVTV;
use Illuminate\Http\Request;
use App\LoaiThuocBVTV;

class ThuocBVTVController extends Controller
{
	public function getIndex()
	{
		return view('farmer.thuocbvtv_index', ['dsThuocBvtv' => ThuocBvtv::all()]);
	}
	
	public function getCreate()
	{
		return view('farmer.thuocbvtv_create', ['dsLoaiThuocBVTV' => LoaiThuocBVTV::all()]);
	}
	
	public function postCreate(Request $request)
	{
		try {
			$thuocBvtv = new ThuocBvtv();
			$thuocBvtv->loaithuocbvtv_id = $request->loaithuocbvtv_id;
			$thuocBvtv->tenthuocbvtv = $request->tenthuocbvtv;
			$thuocBvtv->mucdich = $request->mucdich;
			$thuocBvtv->nguongoc = $request->nguongoc;
			$thuocBvtv->thanhphanhamluong = $request->thanhphanhamluong;
			$thuocBvtv->nhacungcap = $request->nhacungcap;
			$thuocBvtv->mota = $request->mota;
			$thuocBvtv->save();
			return redirect()->route('farmer.thuocbvtv.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
		return view('farmer.thuocbvtv_index', ['dsThuocBvtv' => ThuocBvtv::all()]);
	}
	
	public function getEdit($id)
	{
		return view('farmer.thuocbvtv_edit', ['thuocBvtv' => ThuocBvtv::findOrFail($id)]);
	}
	
	public function postEdit(Request $request)
	{
		$thuocBvtv = ThuocBvtv::findOrFail($request->thuocbvtvid);
		try {
			$thuocBvtv->loaithuocbvtv_id = $request->loaithuocbvtv_id;
			$thuocBvtv->tenthuocbvtv = $request->tenthuocbvtv;
			$thuocBvtv->mucdich = $request->mucdich;
			$thuocBvtv->nguongoc = $request->nguongoc;
			$thuocBvtv->thanhphanhamluong = $request->thanhphanhamluong;
			$thuocBvtv->nhacungcap = $request->nhacungcap;
			$thuocBvtv->mota = $request->mota;
			$thuocBvtv->save();
			return redirect()->route('farmer.thuocbvtv.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
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
			ThuocBvtv::destroy($id);
			return redirect()->route('farmer.thuocbvtv.index')->with(['result' => True, 'message' => "Xóa thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
}
