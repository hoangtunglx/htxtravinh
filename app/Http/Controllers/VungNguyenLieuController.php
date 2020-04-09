<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\NongSan;
use App\HopTacXa;
use App\VungNguyenLieu;
use Illuminate\Http\Request;
use App\Http\Requests\VungNguyenLieuRequest;

class VungNguyenLieuController extends Controller
{
	public function getIndex()
	{
		return VungNguyenLieu::all();
	}
	public function getIndexAdmin()
	{
		return view('admin.vungnguyenlieu_index', ['dsVungNguyenLieu' => self::getIndex()]);
	}
	public function getIndexManager()
	{
		return view('manager.vungnguyenlieu_index', ['dsVungNguyenLieu' => self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.vungnguyenlieu_index', ['dsVungNguyenLieu' => self::getIndex()]);
	}
	
	public function getIndexFarmer()
	{
		return view('farmer.vungnguyenlieu_index', ['dsVungNguyenLieu' => self::getIndex()]);
	}
	public function getCreateAdmin()
	{
		return view('admin.vungnguyenlieu_create', ['dsNongSan' => NongSan::all(), 'dsHopTacXa' => HopTacXa::all() ]);
	}
	
	public function getCreateManager()
	{
		return view('manager.vungnguyenlieu_create');
	}
	
	public function getCreateOfficer()
	{
		return view('officer.vungnguyenlieu_create', ['dsNongSan' => NongSan::all(), 'dsHopTacXa' => HopTacXa::all()]);
	}
	
	
	public function postCreate(VungNguyenLieuRequest $request)
	{
		try {
			$vungNguyenLieu = new VungNguyenLieu();
			$vungNguyenLieu->nongsan_id = $request->nongsan_id;
			$vungNguyenLieu->hoptacxa_id = $request->hoptacxa_id;
			$vungNguyenLieu->tenvungnguyenlieu = $request->tenvungnguyenlieu;
			$vungNguyenLieu->tongdientich = $request->tongdientich;
			$vungNguyenLieu->tongsothua = $request->tongsothua;
			$vungNguyenLieu->tongsothanhvien = $request->tongsothanhvien;
			$vungNguyenLieu->vitri = $request->vitri;
			
			$vungNguyenLieu->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postCreateAdmin(VungNguyenLieuRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.vungnguyenlieu.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postCreateManager(VungNguyenLieuRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('manager.vungnguyenlieu.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postCreateOfficer(VungNguyenLieuRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.vungnguyenlieu.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function getEditAdmin($id)
	{
		return view('admin.vungnguyenlieu_edit', ['vungNguyenLieu' => VungNguyenLieu::findOrFail($id),'nongSan' => NongSan::all(),'hopTacXa' => HopTacXa::all()]);
	}
	
	public function getEditManager($id)
	{
		return view('manager.vungnguyenlieu_edit', ['vungNguyenLieu' => VungNguyenLieu::findOrFail($id)]);
	}
	
	public function getEditOfficer($id)
	{
		return view('officer.vungnguyenlieu_edit', ['vungNguyenLieu' => VungNguyenLieu::findOrFail($id)]);
	}
	
	
	public function postEdit(VungNguyenLieuRequest $request)
	{
		$vungNguyenLieu = VungNguyenLieu::findOrFail($request->vungnguyenlieuid);
		try {
			$vungNguyenLieu->nongsan_id = $request->nongsan_id;
			$vungNguyenLieu->hoptacxa_id = $request->hoptacxa_id;
			$vungNguyenLieu->tenvungnguyenlieu = $request->tenvungnguyenlieu;
			$vungNguyenLieu->tongdientich = $request->tongdientich;
			$vungNguyenLieu->tongsothua = $request->tongsothua;
			$vungNguyenLieu->tongsothanhvien = $request->tongsothanhvien;
			$vungNguyenLieu->vitri = $request->vitri;
			
			$vungNguyenLieu->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postEditAdmin(VungNguyenLieuRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.vungnguyenlieu.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditManager(VungNguyenLieuRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('manager.vungnguyenlieu.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditOfficer(VungNguyenLieuRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.vungnguyenlieu.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	
	public function getDelete($id)
	{
		//
	}
	
	public function postDelete($id)
	{
		try {
			VungNguyenLieu::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.vungnguyenlieu.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteManager($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('manager.vungnguyenlieu.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.vungnguyenlieu.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
}