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
		return ['dsPhanBon' => PhanBon::all()];
	}

	public function getIndexAdmin()
	{
		return view('admin.phanbon_index', self::getIndex());
	}

	public function getIndexManager()
	{
		return view('manager.phanbon_index', self::getIndex());
	}

	public function getIndexOfficer()
	{
		return view('officer.phanbon_index', self::getIndex());
	}

	public function getIndexFarmer()
	{
		return view('farmer.phanbon_index', self::getIndex());
	}
	
	public function getCreate()
	{
		return ['dsLoaiPhanBon'=> LoaiPhanBon::all()];
	}

	public function getCreateAdmin()
	{
		return view('admin.phanbon_create', self::getCreate());
	}

	public function getCreateManager()
	{
		return view('manager.phanbon_create', self::getCreate());
	}

	public function getCreateOfficer()
	{
		return view('officer.phanbon_create', self::getCreate());
	}

	public function getCreateFarmer()
	{
		return view('farmer.phanbon_create', self::getCreate());
	}
	
	public function postCreate(Request $request)
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
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	
	public function postCreateAdmin(PhanBonRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.phanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postCreateManager(PhanBonRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('manager.phanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postCreateOfficer(PhanBonRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.phanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postCreateFarmer(PhanBonRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('farmer.phanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function getEdit($id)
	{
		return ['phanBon' => PhanBon::find($id), 'dsLoaiPhanBon' => LoaiPhanBon::all()];
	}
	
	public function getEditAdmin($id)
	{
		return view('admin.phanbon_edit', self::getEdit($id));
	}
	
	public function getEditManager($id)
	{
		return view('manager.phanbon_edit', self::getEdit($id));
	}
	
	public function getEditOfficer($id)
	{
		return view('officer.phanbon_edit', self::getEdit($id));
	}
	
	public function getEditFarmer($id)
	{
		return view('farmer.phanbon_edit', self::getEdit($id));
	}
	
	public function postEdit(Request $request)
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
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	
	public function postEditAdmin(PhanBonRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.phanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditManager(PhanBonRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('manager.phanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditOfficer(PhanBonRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.phanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditFarmer(PhanBonRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('farmer.phanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function getDelete($id)
	{
		//
	}
	
	public function postDelete($id)
	{
		try {
			PhanBon::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	
	public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.phanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteManager($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('manager.phanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.phanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postDeleteFarmer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('farmer.phanbon.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
}