<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\LoaiTieuChuanSX;
use Illuminate\Http\Request;
use App\Http\Requests\LoaiTieuChuanSXRequest;

class LoaiTieuChuanSXController extends Controller
{
	public function getIndex()
	{
		return view('farmer.loaitieuchuansx_index', ['dsLoaiTieuChuanSX' => LoaiTieuChuanSX::all()]);
	}
	
	public function getCreate()
	{
		return view('farmer.loaitieuchuansx_create');
	}
	
	public function postCreate(LoaiTieuChuanSXRequest $request)
	{
		try {
			$loaiTieuChuanSX = new LoaiTieuChuanSX();
			$loaiTieuChuanSX->tenloaitieuchuansx = $request->tenloaitieuchuansx;
			$loaiTieuChuanSX->mota = $request->mota;
			$loaiTieuChuanSX->save();
			return redirect()->route('farmer.loaitieuchuansx.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
	
	public function getEdit($id)
	{
		return view('farmer.loaitieuchuansx_edit', ['loaiTieuChuanSX' => LoaiTieuChuanSX::findOrFail($id)]);
	}
	
	public function postEdit(LoaiTieuChuanSXRequest $request)
	{
		$loaiTieuChuanSX = LoaiTieuChuanSX::findOrFail($request->loaitieuchuansxid);
		try {
			$loaiTieuChuanSX->tenloaitieuchuansx = $request->tenloaitieuchuansx;
			$loaiTieuChuanSX->mota = $request->mota;
			$loaiTieuChuanSX->save();
			return redirect()->route('farmer.loaitieuchuansx.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
	
	public function getDelete($id)
	{
		//
	}
	
	public function postDelete($id)
	{
		try {
			LoaiTieuChuanSX::destroy($id);
			return redirect()->route('farmer.loaitieuchuansx.index')->with(['result' => True, 'message' => "Xóa thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
}