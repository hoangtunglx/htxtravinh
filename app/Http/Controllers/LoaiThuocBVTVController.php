<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\LoaiThuocBVTV;
use Illuminate\Http\Request;
use App\Http\Requests\LoaiThuocBvtvRequest;

class LoaiThuocBVTVController extends Controller
{
	public function getIndex()
	{
		return ['dsLoaiThuocBvtv' => LoaiThuocBvtv::all()];
	}
	
	public function getIndexAdmin()
	{
		return view('admin.loaithuocbvtv_index', self::getIndex());
	}
	
	public function getIndexManager()
	{
		return view('manager.loaithuocbvtv_index', self::getIndex());
	}
	
	public function getIndexOfficer()
	{
		return view('officer.loaithuocbvtv_index', self::getIndex());
	}
	
	public function getIndexFarmer()
	{
		return view('farmer.loaithuocbvtv_index', self::getIndex());
	}
	
	public function getCreateAdmin()
	{
		return view('admin.loaithuocbvtv_create');
	}

	public function getCreateManager()
	{
		return view('manager.loaithuocbvtv_create');
	}
	
	public function getCreateOfficer()
	{
		return view('officer.loaithuocbvtv_create');
	}
	
	public function getCreateFarmer()
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
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	
	public function postCreateAdmin(LoaiThuocBvtvRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.loaithuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postCreateManager(LoaiThuocBvtvRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('manager.loaithuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postCreateOfficer(LoaiThuocBvtvRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.loaithuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateFarmer(LoaiThuocBvtvRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('farmer.loaithuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function getEdit($id)
	{
		return ['loaiThuocBvtv' => LoaiThuocBvtv::findOrFail($id)];
	}
	
	public function getEditAdmin($id)
	{
		return view('admin.loaithuocbvtv_edit', self::getEdit($id));
	}
	
	public function getEditManager($id)
	{
		return view('manager.loaithuocbvtv_edit', self::getEdit($id));
	}
	
	public function getEditOfficer($id)
	{
		return view('officer.loaithuocbvtv_edit', self::getEdit($id));
	}
	
	public function getEditFarmer($id)
	{
		return view('farmer.loaithuocbvtv_edit', self::getEdit($id));
	}
	
	public function postEdit(Request $request)
	{
		$loaiThuocBvtv = LoaiThuocBvtv::findOrFail($request->loaithuocbvtvid);
		try {
			$loaiThuocBvtv->tenloaithuocbvtv = $request->tenloaithuocbvtv;
			$loaiThuocBvtv->mota = $request->mota;
			$loaiThuocBvtv->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	
	public function postEditAdmin(LoaiThuocBvtvRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.loaithuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditManager(LoaiThuocBvtvRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('manager.loaithuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditOfficer(LoaiThuocBvtvRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.loaithuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditFarmer(LoaiThuocBvtvRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('farmer.loaithuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function getDelete($id)
	{
		
	}

	public function postDelete($id)
	{
		try {
			LoaiThuocBvtv::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	
	public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.loaithuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteManager($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('manager.loaithuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.loaithuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteFarmer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('farmer.loaithuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
}
