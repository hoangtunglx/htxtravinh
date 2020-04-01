<?php

/**
 * Người thực hiện	: Họ Và Tên
 * Ngày cập nhật	: dd/mm/yyyy
 */

namespace App\Http\Controllers;
use App\ThuaDat;
use App\ThongTinMoiTruong;
use Illuminate\Http\Request;
use App\Http\Requests\ThongTinMoiTruongRequest;
use App\GoiYPhanBonNuocTuoi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ThongTinMoiTruongController extends Controller
{

	public function getThongtinmoitruong_thuadat()
	{
		return ThuaDat::all();
	}


	public function getIndexAdmin($id)
	{
		$dsThuaDat = ThuaDat::find($id);


		//$dsThongTinMoiTruong = ThongTinMoiTruong::orderBy('created_at', 'desc')->get();

		$dsThongTinMoiTruong =DB::table("thuadat")
		->where('thuadat.id', '=', $id)
		->join("thongtinmoitruong","thuadat.id","=","thongtinmoitruong.thuadat_id")
		->join("nguoidung","nguoidung.id","=","thongtinmoitruong.nguoidung_id")
		->select(DB::raw("thongtinmoitruong.*,thuadat.tenthuadat,nguoidung.name"))
		->get();
		$id=$dsThuaDat->id;
		
		return view('admin.thongtinmoitruong_index',['dsThongTinMoiTruong'=>$dsThongTinMoiTruong,'dsThuaDat'=>$dsThuaDat,'id'=>$id]);


	}

	public function getIndexOfficer($id)
	{
		$dsThuaDat = ThuaDat::find($id);


		//$dsThongTinMoiTruong = ThongTinMoiTruong::orderBy('created_at', 'desc')->get();

		$dsThongTinMoiTruong =DB::table("thuadat")
		->where('thuadat.id', '=', $id)
		->join("thongtinmoitruong","thuadat.id","=","thongtinmoitruong.thuadat_id")
		->join("nguoidung","nguoidung.id","=","thongtinmoitruong.nguoidung_id")
		->select(DB::raw("thongtinmoitruong.*,thuadat.tenthuadat,nguoidung.name"))
		->get();
		$id=$dsThuaDat->id;

		return view('officer.thongtinmoitruong_index',['dsThongTinMoiTruong'=>$dsThongTinMoiTruong,'dsThuaDat'=>$dsThuaDat,'id'=>$id]);


	}

	public function getIndexFarmer($id)
	{
		$dsThuaDat = ThuaDat::find($id);


		//$dsThongTinMoiTruong = ThongTinMoiTruong::orderBy('created_at', 'desc')->get();

		$dsThongTinMoiTruong =DB::table("thuadat")
		->where('thuadat.id', '=', $id)
		->join("thongtinmoitruong","thuadat.id","=","thongtinmoitruong.thuadat_id")
		->join("nguoidung","nguoidung.id","=","thongtinmoitruong.nguoidung_id")
		->select(DB::raw("thongtinmoitruong.*,thuadat.tenthuadat,nguoidung.name"))
		->get();
		$id=$dsThuaDat->id;

		return view('farmer.thongtinmoitruong_index',['dsThongTinMoiTruong'=>$dsThongTinMoiTruong,'dsThuaDat'=>$dsThuaDat,'id'=>$id]);


	}

	public function getIndexManager($id)
	{
		$dsThuaDat = ThuaDat::find($id);


		//$dsThongTinMoiTruong = ThongTinMoiTruong::orderBy('created_at', 'desc')->get();

		$dsThongTinMoiTruong =DB::table("thuadat")
		->where('thuadat.id', '=', $id)
		->join("thongtinmoitruong","thuadat.id","=","thongtinmoitruong.thuadat_id")
		->select(DB::raw("thongtinmoitruong.*,thuadat.tenthuadat,nguoidung.name"))
		->select(DB::raw("thongtinmoitruong.*,thuadat.tenthuadat"))
		->get();
		$id=$dsThuaDat->id;

		return view('manager.thongtinmoitruong_index',['dsThongTinMoiTruong'=>$dsThongTinMoiTruong,'dsThuaDat'=>$dsThuaDat,'id'=>$id]);


	}




	// hien thi thong tin thua dat

	public function getThongtinmoitruong_thuadatAdmin()
	{
		return view('admin.thongtinmoitruong_thuadat',['dsThuaDat'=> self::getThongtinmoitruong_thuadat()]);
	}




	public function getThongtinmoitruong_thuadatManager()
	{
		return view('manager.thongtinmoitruong_thuadat',['dsThuaDat'=> self::getThongtinmoitruong_thuadat()]);
	}

	public function getThongtinmoitruong_thuadatOfficer()
	{
		return view('officer.thongtinmoitruong_thuadat',['dsThuaDat'=> self::getThongtinmoitruong_thuadat()]);
	}

	public function getThongtinmoitruong_thuadatFarmer()
	{
		return view('farmer.thongtinmoitruong_thuadat',['dsThuaDat'=> self::getThongtinmoitruong_thuadat()]);
	}


	public function getCreateAdmin($id)
	{
		$dsThuaDat = ThuaDat::find($id);

		return view('admin.thongtinmoitruong_create',['dsThuaDat'=>$dsThuaDat]);
	}






	public function postCreate(ThongTinMoiTruongRequest $request)
	{
		{
		try {
			$thongTinMoiTruong = new ThongTinMoiTruong();
			// chưa tạo đăng nhập => lỗi
			$thongTinMoiTruong->nguoidung_id = Auth::id();
			$thongTinMoiTruong->thuadat_id = $request->thuadat_id;
			$thongTinMoiTruong->nhietdo = $request->nhietdo;
			$thongTinMoiTruong->doamkhongkhi = $request->doamkhongkhi;
			$thongTinMoiTruong->doamdat = $request->doamdat;
			$thongTinMoiTruong->doph = $request->doph;
			$thongTinMoiTruong->doman = $request->doman;
			$thongTinMoiTruong->mucnuoc = $request->mucnuoc;
			$thongTinMoiTruong->tinhtrang = $request->tinhtrang;
			$thongTinMoiTruong->save();
			return ['result' => True, 'message' => "Lưu thành công!"];
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	}

	public function postCreateAdmin(ThongTinMoiTruongRequest $request)
	{
		$results = self::postCreate($request);
//	return redirect('admin/thong-tin-moi-truong/index/'.$request->thuadat_id);
	//return $results['result'] ? redirect()->route('admin.thongtinmoitruong.index/'.$request->thuadat_id)->with($results) : redirect()->back()->withInput()->with($results);
	return $results['result'] ? redirect('admin/thong-tin-moi-truong/index/'.$request->thuadat_id)->with($results) : redirect()->back()->withInput()->with($results);
	}


	public function postCreateOfficer(ThongTinMoiTruongRequest $request)
	{
		$results = self::postCreate($request);
//	return redirect('admin/thong-tin-moi-truong/index/'.$request->thuadat_id);
	//return $results['result'] ? redirect()->route('admin.thongtinmoitruong.index/'.$request->thuadat_id)->with($results) : redirect()->back()->withInput()->with($results);
	return $results['result'] ? redirect('officer/thong-tin-moi-truong/index/'.$request->thuadat_id)->with($results) : redirect()->back()->withInput()->with($results);
	}

	public function getEditAdmin($id)
	{
		$thongTinMoiTruong = ThongTinMoiTruong::find($id);
		//$thongTinMoiTruong = ThongTinMoiTruong::all();
		//$dsThuaDat = ThuaDat::all();
		return view('admin.thongtinmoitruong_edit',['thongTinMoiTruong' => $thongTinMoiTruong /*'dsThuaDat' => $dsThuaDat*/]);
	}


	public function getEditOfficer($id)
	{
		$thongTinMoiTruong = ThongTinMoiTruong::find($id);
		//$thongTinMoiTruong = ThongTinMoiTruong::all();
		//$dsThuaDat = ThuaDat::all();
		return view('officer.thongtinmoitruong_edit',['thongTinMoiTruong' => $thongTinMoiTruong /*'dsThuaDat' => $dsThuaDat*/]);
	}

	public function postEdit(ThongTinMoiTruongRequest $request)
	{
		$thongTinMoiTruong = ThongTinMoiTruong::findOrFail($request->thongtinmoitruongid);
		try {
			$thongTinMoiTruong->nhietdo = $request->nhietdo;
			$thongTinMoiTruong->doamkhongkhi = $request->doamkhongkhi;
			$thongTinMoiTruong->doamdat = $request->doamdat;
			$thongTinMoiTruong->doph = $request->doph;
			$thongTinMoiTruong->doman = $request->doman;
			$thongTinMoiTruong->mucnuoc = $request->mucnuoc;
			$thongTinMoiTruong->tinhtrang = $request->tinhtrang;
			$thongTinMoiTruong->save();
			return (['result' => True, 'message' => "Lưu thành công!"]);
		} catch (\Throwable $th) {
			return ['result' => False, 'message'=> $th->getMessage()];
		}
	}
	public function postEditAdmin(ThongTinMoiTruongRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect('admin/thong-tin-moi-truong/index/'.$request->thuadat_id)->with($results) : redirect()->back()->withInput()->with($results);
		//return redirect('admin/thong-tin-moi-truong/index/'.$request->thuadat_id);
	}

	public function postEditOfficer(ThongTinMoiTruongRequest $request)
	{
		$results = self::postEdit($request);
		return $results['result'] ? redirect('officer/thong-tin-moi-truong/index/'.$request->thuadat_id)->with($results) : redirect()->back()->withInput()->with($results);
		//return redirect('admin/thong-tin-moi-truong/index/'.$request->thuadat_id);
	}

/*
public function postDelete(ThongTinMoiTruongRequest $request)
	{
		
		try {
			//$thongTinMoiTruong = ThongTinMoiTruong::findOrFail($request->thongtinmoitruongid);
			
			//$thongTinMoiTruong->delete();
			
			ThongTinMoiTruong::destroy($request->thongtinmoitruongid);
			

			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}

	public function postDeleteAdmin(ThongTinMoiTruongRequest $request)
	{
		$results = self::postDelete($request);
		
		return $results['result'] ? redirect('admin/thong-tin-moi-truong/index/'.$request->thuadat_id)->with($results) : redirect()->back()->withInput()->with($results);
	//	return redirect('admin/thong-tin-moi-truong/index/'.$request->thuadat_id);
		//return $results['result'] ? redirect()->route('admin.thongtinmoitruong.index')->with($results) : redirect()->back()->withInput()->with($results);
	}

*/

	/*public function postDelete($id)
	{
		try {
			ThongTinMoiTruong::destroy($id);
			return ['result' => True, 'message' => "Xóa thành công!"];
		} catch (\Throwable $th) {
				return ['result' => False, 'message'=> $th->getMessage()];
		}
	}*/



		/*public function postDeleteAdmin($id)
		{
			$results = self::postDelete($id);
			return $results['result'] ? redirect()->route('admin.thongtinthoitiet.index')->with($results) : redirect()->back()->withInput()->with($results);
		}*/
		public function getDeleteAdmin($id)
		{
			$ldsGoiYPhanBonNuocTuoi=GoiYPhanBonNuocTuoi::where('thongtinmoitruong_id','=',$id)->get();
			if(count($ldsGoiYPhanBonNuocTuoi)==0)
			{
				$thongTinMoiTruong=ThongTinMoiTruong::find($id);

				$thongTinMoiTruong->delete();

				return redirect()->back()->with('result','alert-success')->with('message','Xóa thành công');
			}
			else
			{
				return redirect()->back()->with('message','Không thể xóa, gàng buộc khóa ngoại');
			}
			
			
		}

		public function getDeleteOfficer($id)
		{
			$ldsGoiYPhanBonNuocTuoi=GoiYPhanBonNuocTuoi::where('thongtinmoitruong_id','=',$id)->get();
			if(count($ldsGoiYPhanBonNuocTuoi)==0)
			{
				$thongTinMoiTruong=ThongTinMoiTruong::find($id);

				$thongTinMoiTruong->delete();

				return redirect()->back()->with('result','alert-success')->with('message','Xóa thành công');
			}
			else
			{
				return redirect()->back()->with('message','Không thể xóa, gàng buộc khóa ngoại');
			}
			
			
		}



	
}
