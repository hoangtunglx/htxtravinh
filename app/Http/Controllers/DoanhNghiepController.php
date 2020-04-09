<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\DoanhNghiep;
use Illuminate\Http\Request;
use App\Http\Requests\DoanhNghiepRequest;

class DoanhNghiepController extends Controller
{
	public function getIndex()
	{
		return DoanhNghiep::all();
	}
	public function getIndexAdmin()
	{
		return view('admin.doanhnghiep_index', ['dsDoanhNghiep' => self::getIndex()]);
	}

	public function getIndexManager()
	{
		return view('manager.doanhnghiep_index', ['dsDoanhNghiep' => self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.doanhnghiep_index', ['dsDoanhNghiep' => self::getIndex()]);
	}

	public function getIndexFarmer()
	{
		return view('farmer.doanhnghiep_index', ['dsDoanhNghiep' => self::getIndex()]);
	}

	public function getCreateAdmin()
	{
		return view('admin.doanhnghiep_create');
	}

	public function getCreateManager()
	{
		return view('manager.doanhnghiep_create');
	}

	public function getCreateOfficer()
	{
		return view('officer.doanhnghiep_create');
	}

	public function getCreateFarmer()
	{
		return view('farmer.doanhnghiep_create');
	}

	public function postCreate(DoanhNghiepRequest $request)
	{
		try {
			$doanhNghiep = new DoanhNghiep();
			$doanhNghiep->tendoanhnghiep = $request->tendoanhnghiep;
			$doanhNghiep->nguoidaidien = $request->nguoidaidien;
			$doanhNghiep->	diachi = $request->	diachi;
			$doanhNghiep->sodienthoai = $request->sodienthoai;
			$doanhNghiep->vitri = $request->vitri;

			$doanhNghiep->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postCreateAdmin(DoanhNghiepRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.doanhnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateManager(DoanhNghiepRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('manager.doanhnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateOfficer(DoanhNghiepRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.doanhnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateFarmer(DoanhNghiepRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('farmer.doanhnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getEditAdmin($id)
	{
		
		return view('admin.doanhnghiep_edit', ['doanhNghiep' => DoanhNghiep::findOrFail($id)]);
	}

	public function getEditManager($id)
	{
		return view('manager.doanhnghiep_edit', ['doanhNghiep' => DoanhNghiep::findOrFail($id)]);
	}

	public function getEditOfficer($id)
	{
		return view('officer.doanhnghiep_edit', ['doanhNghiep' => DoanhNghiep::findOrFail($id)]);
	}

	public function getEditFarmer($id)
	{
		return view('farmer.doanhnghiep_edit', ['doanhNghiep' => DoanhNghiep::findOrFail($id)]);
	}

	public function postEdit(DoanhNghiepRequest $request)
	{
		$doanhNghiep = DoanhNghiep::findOrFail($request->doanhnghiepid);
		try {
			$doanhNghiep->tendoanhnghiep = $request->tendoanhnghiep;
			$doanhNghiep->nguoidaidien = $request->nguoidaidien;
			$doanhNghiep->diachi = $request->diachi;
			$doanhNghiep->sodienthoai = $request->sodienthoai;
			$doanhNghiep->vitri = $request->vitri;
			
			$doanhNghiep->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postEditAdmin(DoanhNghiepRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.doanhnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditManager(DoanhNghiepRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('manager.doanhnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditOfficer(DoanhNghiepRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.doanhnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditFarmer(DoanhNghiepRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('farmer.doanhnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getDelete($id)
	{
		//
	}

	public function postDelete($id)
	{
		try {
			DoanhNghiep::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.doanhnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDeleteManager($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('manager.doanhnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.doanhnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDeleteFarmer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('farmer.doanhnghiep.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	}
