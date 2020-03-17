<?php

/**
 * Người thực hiện	: Võ Phát Đạt
 * Ngày cập nhật	: 14/03/2020
 */

namespace App\Http\Controllers;
use App\TieuChuanSX;
use App\LoaiTieuChuanSX;
use Illuminate\Http\Request;
use App\Http\Requests\TieuChuanSXRequest;

class TieuChuanSXController extends Controller
{
	public function getIndex()
	{
		return view('farmer.tieuchuansx_index', ['dsTieuChuanSX' => TieuChuanSX::all()]);
	}
	
	public function getCreate()
	{
		$loaiTieuChuanSX = LoaiTieuChuanSX::all();
		return view('farmer.tieuchuansx_create',['loaiTieuChuanSX'=>$loaiTieuChuanSX]);
	}
	
	public function postCreate(TieuChuanSXRequest $request)
	{
		try {
			$tieuChuanSX = new TieuChuanSX();
			$tieuChuanSX->loaitieuchuansx_id = $request->loaitieuchuansx_id;
			$tieuChuanSX->tentieuchuansanxuat = $request->tentieuchuansanxuat;
			$tieuChuanSX->mota = $request->mota;
			$tieuChuanSX->save();
			return redirect()->route('farmer.tieuchuansx.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
	
	public function getEdit($id)
	{	
		$loaiTieuChuanSX = LoaiTieuChuanSX::all();
		$tieuChuanSX = TieuChuanSX::find($id);
		return view('farmer.tieuchuansx_edit', ['tieuChuanSX' => $tieuChuanSX, 'loaiTieuChuanSX' => $loaiTieuChuanSX]);
	}
	
	public function postEdit(TieuChuanSXRequest $request)
	{
		$tieuChuanSX = TieuChuanSX::findOrFail($request->tieuchuansxid);
		try {
			$tieuChuanSX->loaitieuchuansx_id = $request->loaitieuchuansx_id;
			$tieuChuanSX->tentieuchuansanxuat = $request->tentieuchuansanxuat;
			$tieuChuanSX->mota = $request->mota;
			$tieuChuanSX->save();
			return redirect()->route('farmer.tieuchuansx.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
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
			TieuChuanSX::destroy($id);
			return redirect()->route('farmer.tieuchuansx.index')->with(['result' => True, 'message' => "Xóa thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
}