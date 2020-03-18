<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;

use App\NongSan;
use App\loaiNongSan;
use Illuminate\Http\Request;
use App\Http\Requests\NongSanRequest;

class NongSanController extends Controller
{
	public function getIndex()
	{
		return NongSan::all();
	}

	public function getIndexAdmin()
	{
		return view('admin.nongsan_index', ['dsNongSan' => self::getIndex()]);
	}

	public function getIndexManager()
	{
		return view('manager.nongsan_index', ['dsNongSan' => self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.nongsan_index', ['dsNongSan' => self::getIndex()]);
	}

	public function getIndexFarmer()
	{
		return view('farmer.nongsan_index', ['dsNongSan' => self::getIndex()]);
	}

	public function getCreateAdmin()
	{
		
		return view('admin.nongsan_create', ['dsLoaiNongSan' => loaiNongSan::all()]);
	}
	public function getCreateOfficer()
	{
		
		return view('officer.nongsan_create', ['dsLoaiNongSan' => loaiNongSan::all()]);
	}
	public function postCreate(NongSanRequest $request)
	{
		try {
			$nongSan = new NongSan();
			$nongSan->loainongsan_id = $request->loainongsan_id;
			$nongSan->tennongsan = $request->tennongsan;
			$nongSan->mota = $request->mota;
			$nongSan->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postCreateAdmin(NongSanRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.nongsan.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postCreateOfficer(NongSanRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.nongsan.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getEditAdmin($id)
	{
		return view('admin.nongsan_edit', ['nongSan' => NongSan::findOrFail($id), 'dsLoaiNongSan' => loaiNongSan::all()]);
	}

	public function getEditOfficer($id)
	{
		return view('officer.nongsan_edit', ['nongSan' => NongSan::findOrFail($id), 'dsLoaiNongSan' => loaiNongSan::all()]);
	}

	public function postEdit(NongSanRequest $request)
	{
		$nongSan = NongSan::findOrFail($request->nongsanid);
		try {
			$nongSan->loainongsan_id = $request->loainongsan_id;
			$nongSan->tennongsan = $request->tennongsan;
			$nongSan->mota = $request->mota;
			$nongSan->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postEditAdmin(NongSanRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.nongsan.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditOfficer(NongSanRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.nongsan.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getDelete($id)
	{
		//
	}

	public function postDelete($id)
	{
		try {
			NongSan::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteAdmin($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('admin.nongsan.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postDeleteOfficer($id)
	{
		$results = self::postDelete($id);
		return $results['result'] ? redirect()->route('officer.nongsan.index')->with($results) : redirect()->back()->withInput()->with($results);
	}
}