<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;
use App\DuBaoSauBenh;
use App\SauBenh;
use Illuminate\Http\Request;
use App\Http\Requests\SauBenhRequest;
use Illuminate\Support\Facades\Auth;
class SauBenhController extends Controller
{
	public function getIndex()
	{
		return SauBenh::all();
	}
	public function getIndexAdmin()
	{
		return view('admin.saubenh_index',['dsSauBenh'=> self::getIndex()]);
	}
	public function getIndexManager()
	{
		return view('manager.saubenh_index',['dsSauBenh'=> self::getIndex()]);
	}

	public function getIndexOfficer()
	{
		return view('officer.saubenh_index',['dsSauBenh'=> self::getIndex()]);
	}

	public function getIndexFarmer()
	{
		return view('farmer.saubenh_index',['dsSauBenh'=> self::getIndex()]);
	}

	public function getCreateAdmin()
	{
		return view('admin.saubenh_create');
	}

	public function getCreateManager()
	{
		return view('manager.saubenh_create');
	}

	public function getCreateOfficer()
	{
		return view('officer.saubenh_create');
	}

	public function getCreateFarmer()
	{
		return view('farmer.saubenh_create');
	}

	public function postCreate(SauBenhRequest $request)
	{
		try {
			$sauBenh = new SauBenh();
			$sauBenh->tensaubenh = $request->tensaubenh;
			$sauBenh->dacdiem = $request->dacdiem;
			$sauBenh->caytrongtancong = $request->caytrongtancong;
			$sauBenh->dauhieu = $request->dauhieu;
			$sauBenh->bienphapphongtranh = $request->bienphapphongtranh;
			$sauBenh->ghichu = $request->ghichu;
			$sauBenh->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postCreateAdmin(SauBenhRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('admin.saubenh.index')->with($results) : redirect()->back()->withInput()->with($results);
	}



	public function postCreateOfficer(SauBenhRequest $request)
	{
		$results = self::postCreate($request);
		return $results['result'] ? redirect()->route('officer.saubenh.index')->with($results) : redirect()->back()->withInput()->with($results);
	}



	public function getEditAdmin($id)
	{
		return view('admin.saubenh_edit', ['sauBenh' => sauBenh::findOrFail($id)]);
	}

	public function getEditManager($id)
	{
		return view('manager.saubenh_edit', ['sauBenh' => sauBenh::findOrFail($id)]);
	}

	public function getEditOfficer($id)
	{
		return view('officer.saubenh_edit', ['sauBenh' => sauBenh::findOrFail($id)]);
	}

	public function getEditFarmer($id)
	{
		return view('farmer.saubenh_edit', ['sauBenh' => sauBenh::findOrFail($id)]);
	}

	public function postEdit(SauBenhRequest $request)
	{
		$sauBenh = SauBenh::findOrFail($request->saubenhid);
		try {
			$sauBenh->tensaubenh = $request->tensaubenh;
			$sauBenh->dacdiem = $request->dacdiem;
			$sauBenh->caytrongtancong = $request->caytrongtancong;
			$sauBenh->dauhieu = $request->dauhieu;
			$sauBenh->bienphapphongtranh = $request->bienphapphongtranh;
			$sauBenh->ghichu = $request->ghichu;
			$sauBenh->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	public function postEditAdmin(SauBenhRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('admin.saubenh.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditOfficer(SauBenhRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('officer.saubenh.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function postEditFarmer(SauBenhRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect()->route('farmer.saubenh.index')->with($results) : redirect()->back()->withInput()->with($results);
	}


		public function postDeleteAdmin($id)
		{
			$ldsDuBaoSauBenh=DuBaoSauBenh::where('saubenh_id','=',$id)->get();
			
			if(count($ldsDuBaoSauBenh)==0  ) 
			{
				$sauBenh=SauBenh::find($id);

				$sauBenh->delete();

				return redirect()->back()->with('result','alert-success')->with('message','Xóa thành công');
			}
			else
			{
				return redirect()->back()->with('message','Không thể xóa, gàng buộc khóa ngoại');
			}

		}

		public function postDeleteOfficer($id)
		{
			$ldsDuBaoSauBenh=DuBaoSauBenh::where('saubenh_id','=',$id)->get();
			
			if(count($ldsDuBaoSauBenh)==0  ) 
			{
				$sauBenh=SauBenh::find($id);

				$sauBenh->delete();

				return redirect()->back()->with('result','alert-success')->with('message','Xóa thành công');
			}
			else
			{
				return redirect()->back()->with('message','Không thể xóa, gàng buộc khóa ngoại');
			}

		}

}
