<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\Giong;
use Illuminate\Http\Request;
use App\LoaiGiong;

class GiongController extends Controller
{
	public function getIndex()
	{
		return view('admin.giong_index', ['dsGiong' => Giong::all()]);
	}
	
	public function getCreate()
	{
		return view('admin.giong_create', ['dsLoaiGiong' => LoaiGiong::all()]);
	}
	
	public function postCreate(Request $request)
	{
		try {
			$giong = new Giong();
			$giong->loaigiong_id = $request->loaigiong_id;
			$giong->tengiong = $request->tengiong;
			$giong->dactinh = $request->dactinh;
			$giong->mausac = $request->mausac;			
			$giong->mota = $request->mota;
			$giong->save();
			return redirect()->route('admin.giong.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
		return view('admin.giong_index', ['dsGiong' => Giong::all()]);
	}
	
	public function getEdit($id)
	{
		return view('admin.giong_edit', ['giong' => Giong::findOrFail($id)]);
	}
	
	public function postEdit(Request $request)
	{
		$giong = Giong::findOrFail($request->giongid);
		try {
			$giong->loaigiong_id = $request->loaigiong_id;
			$giong->tengiong = $request->tengiong;
			$giong->dactinh = $request->dactinh;
			$giong->mausac = $request->mausac;
			$giong->mota = $request->mota;
			$giong->save();
			return redirect()->route('admin.giong.index')->with(['result' => True, 'message' => "Lưu thành công!"]);
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
			Giong::destroy($id);
			return redirect()->route('admin.giong.index')->with(['result' => True, 'message' => "Xóa thành công!"]);
		} catch (\Throwable $th) {
				return redirect()->back()->withInput()->with(['result' => False, 'message'=> $th->getMessage()]);
		}
	}
}
