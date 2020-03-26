<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\ThuocBVTV;
use Illuminate\Http\Request;
use App\LoaiThuocBVTV;
use App\Http\Requests\ThuocBvtvRequest;

class ThuocBVTVController extends Controller
{
	public function getIndex()
	{
		return ['dsThuocBvtv' => ThuocBvtv::all()];
	}
	
	public function getIndexAdmin()
	{
		return view('admin.thuocbvtv_index', self::getIndex()); 
	}
	
	public function getIndexManager()
	{
		return view('manager.thuocbvtv_index', self::getIndex()); 
	}
	
	public function getIndexOfficer()
	{
		return view('officer.thuocbvtv_index', self::getIndex()); 
	}
	
	public function getIndexFarmer()
	{
		return view('farmer.thuocbvtv_index', self::getIndex()); 
	}
	
	public function getCreate()
	{
		return ['dsLoaiThuocBVTV' => LoaiThuocBVTV::all()];
	}
	
	public function getCreateAdmin()
	{
		return view('admin.thuocbvtv_create', self::getCreate());
	}

	public function getCreateManager()
	{
		return view('manager.thuocbvtv_create', self::getCreate());
	}
	public function getCreateOfficer()
	{
		return view('officer.thuocbvtv_create', self::getCreate());
	}
	public function getCreateFarmer()
	{
		return view('farmer.thuocbvtv_create', self::getCreate());
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
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postCreateAdmin(ThuocBvtvRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.thuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateManager(ThuocBvtvRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('manager.thuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateOfficer(ThuocBvtvRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.thuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateFarmer(ThuocBvtvRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('farmer.thuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function getEdit($id)
	{
		return ['thuocBvtv' => ThuocBvtv::findOrFail($id), 'dsLoaiThuocBVTV' => LoaiThuocBVTV::all()	];
	}

	public function getEditAdmin($id)
	{
		return view('admin.thuocbvtv_edit', self::getEdit($id));
	}

	public function getEditManager($id)
	{
		return view('manager.thuocbvtv_edit', self::getEdit($id));
	}

	public function getEditOfficer($id)
	{
		return view('officer.thuocbvtv_edit', self::getEdit($id));
	}

	public function getEditFarmer($id)
	{
		return view('farmer.thuocbvtv_edit', self::getEdit($id));
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
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postEditAdmin(ThuocBvtvRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.thuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditManager(ThuocBvtvRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('manager.thuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditOfficer(ThuocBvtvRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.thuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditFarmer(ThuocBvtvRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('farmer.thuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function getDelete($id)
	{
		// code
	}

	public function postDelete($id)
	{
		try {
			ThuocBvtv::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	
	public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.thuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDeleteManager($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('manager.thuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.thuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDeleteFarmer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('farmer.thuocbvtv.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
}
