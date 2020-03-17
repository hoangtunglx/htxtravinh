<?php

/**
 * Người thực hiện	: Võ Phát Đạt
 * Ngày cập nhật	: 12/03/2020
 */

namespace App\Http\Controllers;

use App\LoaiPhanBon;
use Illuminate\Http\Request;
use App\Http\Requests\LoaiPhanBonRequest;

class LoaiPhanBonController extends Controller
{
	public function getIndex()
	{
		return view('farmer.loaiphanbon_index', ['dsLoaiPhanBon' => LoaiPhanBon::all()]);
	}
	
	public function getCreate()
	{
		return view('farmer.loaiphanbon_create');
	}
	
	public function postCreate(LoaiPhanBonRequest $request)
	{
		try {
			$loaiPhanBon = new LoaiPhanBon();
			$loaiPhanBon->tenloaiphanbon = $request->tenloaiphanbon;
			$loaiPhanBon->mota = $request->mota;
			$loaiPhanBon->save();
			return redirect()->route('farmer.loaiphanbon.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
	
	public function getEdit($id)
	{
		return view('farmer.loaiphanbon_edit', ['loaiPhanBon' => LoaiPhanBon::findOrFail($id)]);
	}
	
	public function postEdit(LoaiPhanBonRequest $request)
	{
		$loaiPhanBon = LoaiPhanBon::findOrFail($request->loaiphanbonid);
		try {
			$loaiPhanBon->tenloaiphanbon = $request->tenloaiphanbon;
			$loaiPhanBon->mota = $request->mota;
			$loaiPhanBon->save();
			return redirect()->route('farmer.loaiphanbon.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
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
			LoaiPhanBon::destroy($id);
			return redirect()->route('farmer.loaiphanbon.index')->with(['result' => True, 'message' => "Xóa thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
}