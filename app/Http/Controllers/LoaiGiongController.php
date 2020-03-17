<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\LoaiGiong;
use Illuminate\Http\Request;
use App\Http\Requests\LoaiGiongRequest;

class LoaiGiongController extends Controller
{
	public function getIndex()
	{
		return LoaiGiong::all();
	}

	public function getIndexAdmin()
	{
		return view('admin.loaigiong_index', ['dsLoaiGiong' => self::getIndex()]);
	}

	public function getIndexManager()
	{
		return view('manager.loaigiong_index', ['dsLoaiGiong' => self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.loaigiong_index', ['dsLoaiGiong' => self::getIndex()]);
	}
	
	public function getIndexFarmer()
	{
		return view('farmer.loaigiong_index', ['dsLoaiGiong' => self::getIndex()]);
	}
	
	public function getCreateAdmin()
	{
		return view('admin.loaigiong_create');
	}
	
	public function getCreateManager()
	{
		return view('manager.loaigiong_create');
	}
	
	public function getCreateOfficer()
	{
		return view('officer.loaigiong_create');
	}
	
	public function getCreateFarmer()
	{
		return view('farmer.loaigiong_create');
	}
	
	public function postCreate(LoaiGiongRequest $request)
	{
		try {
			$loaiGiong = new LoaiGiong();
			$loaiGiong->tenloaigiong = $request->tenloaigiong;
			$loaiGiong->mota = $request->mota;
			$loaiGiong->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postCreateAdmin(LoaiGiongRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.loaigiong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postCreateManager(LoaiGiongRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('manager.loaigiong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postCreateOfficer(LoaiGiongRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.loaigiong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postCreateFarmer(LoaiGiongRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('farmer.loaigiong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function getEditAdmin($id)
	{
		return view('admin.loaigiong_edit', ['loaiGiong' => LoaiGiong::findOrFail($id)]);
	}
	
	public function getEditManager($id)
	{
		return view('manager.loaigiong_edit', ['loaiGiong' => LoaiGiong::findOrFail($id)]);
	}
	
	public function getEditOfficer($id)
	{
		return view('officer.loaigiong_edit', ['loaiGiong' => LoaiGiong::findOrFail($id)]);
	}
	
	public function getEditFarmer($id)
	{
		return view('farmer.loaigiong_edit', ['loaiGiong' => LoaiGiong::findOrFail($id)]);
	}
	
	public function postEdit(LoaiGiongRequest $request)
	{
		$loaiGiong = LoaiGiong::findOrFail($request->loaigiongid);
		try {
			$loaiGiong->tenloaigiong = $request->tenloaigiong;
			$loaiGiong->mota = $request->mota;
			$loaiGiong->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postEditAdmin(LoaiGiongRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.loaigiong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditManager(LoaiGiongRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('manager.loaigiong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditOfficer(LoaiGiongRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.loaigiong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditFarmer(LoaiGiongRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('farmer.loaigiong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function getDelete($id)
	{
		//
	}
	
	public function postDelete($id)
	{
		try {
			LoaiGiong::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.loaigiong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteManager($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('manager.loaigiong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.loaigiong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteFarmer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('farmer.loaigiong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
}