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
		return ['dsLoaiPhanBon' => LoaiPhanBon::all()];
	}
	
	public function getIndexAdmin()
	{
		return view('admin.loaiphanbon_index', self::getIndex());
	}
	
	public function getIndexManager()
	{
		return view('manager.loaiphanbon_index', self::getIndex());
	}
	
	public function getIndexOfficer()
	{
		return view('officer.loaiphanbon_index', self::getIndex());
	}
	
	public function getIndexFarmer()
	{
		return view('farmer.loaiphanbon_index', self::getIndex());
	}
	
	public function getCreateAdmin()
	{
		return view('admin.loaiphanbon_create');
	}
	
	public function getCreateManager()
	{
		return view('manager.loaiphanbon_create');
	}
	
	public function getCreateOfficer()
	{
		return view('officer.loaiphanbon_create');
	}
	
	public function getCreateFarmer()
	{
		return view('farmer.loaiphanbon_create');
	}
	
	public function postCreate(Request $request)
	{
		try {
			$loaiPhanBon = new LoaiPhanBon();
			$loaiPhanBon->tenloaiphanbon = $request->tenloaiphanbon;
			$loaiPhanBon->mota = $request->mota;
			$loaiPhanBon->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	
	public function postCreateAdmin(LoaiPhanBonRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.loaiphanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateManager(LoaiPhanBonRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('manager.loaiphanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateOfficer(LoaiPhanBonRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.loaiphanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateFarmer(LoaiPhanBonRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('farmer.loaiphanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function getEdit($id)
	{
		return ['loaiPhanBon' => LoaiPhanBon::findOrFail($id)];
	}

	public function getEditAdmin($id)
	{
		return view('admin.loaiphanbon_edit', self::getEdit($id));
	}

	public function getEditManager($id)
	{
		return view('manager.loaiphanbon_edit', self::getEdit($id));
	}

	public function getEditOfficer($id)
	{
		return view('officer.loaiphanbon_edit', self::getEdit($id));
	}

	public function getEditFarmer($id)
	{
		return view('farmer.loaiphanbon_edit', self::getEdit($id));
	}
	
	public function postEdit(Request $request)
	{
		$loaiPhanBon = LoaiPhanBon::findOrFail($request->loaiphanbonid);
		try {
			$loaiPhanBon->tenloaiphanbon = $request->tenloaiphanbon;
			$loaiPhanBon->mota = $request->mota;
			$loaiPhanBon->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	
	public function postEditAdmin(LoaiPhanBonRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.loaiphanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditManager(LoaiPhanBonRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('manager.loaiphanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditOfficer(LoaiPhanBonRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.loaiphanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditFarmer(LoaiPhanBonRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('farmer.loaiphanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function getDelete($id)
	{
		
	}
	
	public function postDelete($id)
	{
		try {
			LoaiPhanBon::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	
	public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.loaiphanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteManager($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('manager.loaiphanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.loaiphanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteFarmer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('farmer.loaiphanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
}