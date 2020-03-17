<?php

/**
 * Người thực hiện	: Võ Phát Đạt
 * Ngày cập nhật	: 12/03/2020
 */

namespace App\Http\Controllers;
use App\PhanBon;
use App\LoaiPhanBon;
use Illuminate\Http\Request;
use App\Http\Requests\PhanBonRequest;

class PhanBonController extends Controller
{
	public function getIndex()
	{
		return view('farmer.phanbon_index', ['dsPhanBon' => PhanBon::all()]);
	}
	
	public function getCreate()
	{
		$loaiPhanBon = LoaiPhanBon::all();
		return view('farmer.phanbon_create',['loaiPhanBon'=>$loaiPhanBon]);
	}
	
	public function postCreate(PhanBonRequest $request)
	{
		try {
			$phanBon = new PhanBon();
			$phanBon->loaiphanbon_id = $request->loaiphanbon_id;
			$phanBon->tenphanbon = $request->tenphanbon;
			$phanBon->dactinh = $request->dactinh;
			$phanBon->thanhphanhamluong = $request->thanhphanhamluong;
			$phanBon->nhacungcap = $request->nhacungcap;
			$phanBon->mota = $request->mota;
			$phanBon->save();
			return redirect()->route('farmer.phanbon.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
	
	public function getEdit($id)
	{	
		$loaiPhanBon = LoaiPhanBon::all();
		$phanBon = PhanBon::find($id);
		return view('farmer.phanbon_edit', ['phanBon' => $phanBon, 'loaiPhanBon' => $loaiPhanBon]);
	}
	
	public function postEdit(PhanBonRequest $request)
	{
		$phanBon = PhanBon::findOrFail($request->phanbonid);
		try {
			$phanBon->loaiphanbon_id = $request->loaiphanbon_id;
			$phanBon->tenphanbon = $request->tenphanbon;
			$phanBon->dactinh = $request->dactinh;
			$phanBon->thanhphanhamluong = $request->thanhphanhamluong;
			$phanBon->nhacungcap = $request->nhacungcap;
			$phanBon->mota = $request->mota;
			$phanBon->save();
			return redirect()->route('farmer.phanbon.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
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
			PhanBon::destroy($id);
			return redirect()->route('farmer.phanbon.index')->with(['result' => True, 'message' => "Xóa thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
}