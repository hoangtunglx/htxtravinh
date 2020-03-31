<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\Giong;
use Illuminate\Http\Request;
use App\LoaiGiong;
use App\Http\Requests\GiongRequest;

class GiongController extends Controller
{
	public function getIndex()
	{
		return Giong::all();
	}
	
	public function getIndexAdmin()
	{
		return view('admin.giong_index', ['dsGiong' => self::getIndex()]);
	}
	
	public function getIndexManager()
	{
		return view('manager.giong_index', ['dsGiong' => self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.giong_index', ['dsGiong' => self::getIndex()]);
	}

	public function getIndexFarmer()
	{
		return view('farmer.giong_index', ['dsGiong' => self::getIndex()]);
	}
	
	public function getCreate()
	{
		return LoaiGiong::all();
	}	
	
	public function getCreateAdmin()
	{
		return view('admin.giong_create', ['dsLoaiGiong' => self::getCreate()]);
	}
	
	public function getCreateManager()
	{
		return view('manager.giong_create', ['dsLoaiGiong' => self::getCreate()]);
	}
	
	public function getCreateOfficer()
	{
		return view('officer.giong_create', ['dsLoaiGiong' => self::getCreate()]);
	}
	
	public function getCreateFarmer()
	{
		return view('farmer.giong_create', ['dsLoaiGiong' => self::getCreate()]);
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
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}	
	
	public function postCreateAdmin(GiongRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.giong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postCreateManager(Request $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('manager.giong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postCreateOfficer(Request $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.giong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postCreateFarmer(Request $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('farmer.giong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function getEdit($id)
	{
		return ['giong' => Giong::findOrFail($id), 'dsLoaiGiong' => LoaiGiong::all()];
	}

	public function getEditAdmin($id)
	{
		return view('admin.giong_edit', self::getEdit($id));
	}

	public function getEditManager($id)
	{
		return view('manager.giong_edit', getEdit($id));
	}

	public function getEditOfficer($id)
	{
		return view('officer.giong_edit', getEdit($id));
	}
	
	public function getEditFarmer($id)
	{
		return view('farmer.giong_edit', getEdit($id));
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
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	
	public function postEditAdmin(GiongRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.giong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditManager(GiongRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('manager.giong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditOfficer(GiongRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.giong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function postEditFarmer(GiongRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('farmer.giong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
	
	public function getDelete($id)
	{
		
	}	
	
	public function postDelete($id)
	{
		try {
			Giong::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.giong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDeleteManager($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('Manager.giong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('Officer.giong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDeleteFarmer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('farmer.giong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
}
