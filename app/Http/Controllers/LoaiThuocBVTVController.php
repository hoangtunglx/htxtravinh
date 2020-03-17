<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\LoaiThuocBVTV;
use Illuminate\Http\Request;

class LoaiThuocBVTVController extends Controller
{
	public function getIndex()
	{
		return view('farmer.loaithuocbvtv_index', ['dsLoaiThuocBvtv' => LoaiThuocBvtv::all()]);
	}
	
	public function getCreate()
	{
		return view('farmer.loaithuocbvtv_create');
	}
	
	public function postCreate(Request $request)
	{
		try {
			$loaiThuocBvtv = new LoaiThuocBvtv();
			$loaiThuocBvtv->tenloaithuocbvtv = $request->tenloaithuocbvtv;
			$loaiThuocBvtv->mota = $request->mota;
			$loaiThuocBvtv->save();
			return redirect()->route('farmer.loaithuocbvtv.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
	
	public function getEdit($id)
	{
		return view('farmer.loaithuocbvtv_edit', ['loaiThuocBvtv' => LoaiThuocBvtv::findOrFail($id)]);
	}
	
	public function postEdit(Request $request)
	{
		$loaiThuocBvtv = LoaiThuocBvtv::findOrFail($request->loaithuocbvtvid);
		try {
			$loaiThuocBvtv->tenloaithuocbvtv = $request->tenloaithuocbvtv;
			$loaiThuocBvtv->mota = $request->mota;
			$loaiThuocBvtv->save();
			return redirect()->route('farmer.loaithuocbvtv.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
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
			LoaiThuocBvtv::destroy($id);
			return redirect()->route('farmer.loaithuocbvtv.trangchu')->with(['result' => True, 'message' => "Xóa thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
}
