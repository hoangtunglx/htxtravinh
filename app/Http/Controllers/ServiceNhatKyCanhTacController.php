<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MuaVu;
use App\ThuaDat;
use App\KeHoachSanXuat;

class ServiceNhatKyCanhTacController extends Controller
{
    public function __construct()
    {
      // $this->middleware('auth');
    }

    public function getMuaVu()
    {
      // Get the currently authenticated user's ID
      // $userId = Auth::id();
      $userId = 1;

      $dsMuaVu = ThuaDat::where('nguoidung_id', '=', $userId)
        -> join('kehoachsanxuat_thuadat', 'kehoachsanxuat_thuadat.thuadat_id', '=', 'thuadat.id')
        -> where('kehoachsanxuat_thuadat.trangthaithamgia',  '=', 1)
        -> join('kehoachsanxuat', 'kehoachsanxuat.id', '=', 'kehoachsanxuat_thuadat.kehoachsanxuat_id')
        -> where('kehoachsanxuat.thoigianbatdau', '<=', date(now()))
        -> where('kehoachsanxuat.thoigianketthuc', '>=', date(now()))
        -> join('muavu', 'muavu.id', '=', 'kehoachsanxuat.muavu_id')
        -> select('muavu.*', 'kehoachsanxuat.tenkehoachsanxuatmuavu')
        -> groupBy('muavu.id', 'kehoachsanxuat.tenkehoachsanxuatmuavu')
        -> get();
      
      switch (count($dsMuaVu)) {
        case '0':
          return view('farmer.nhatkycanhtac_khongthamgia');
          break;
          
        case '1':
          self::getThuaDat($dsMuaVu[0]->id);
          break;
        
        default:
          return view('farmer.nhatkycanhtac_chonmuavu', ['dsMuaVu' => $dsMuaVu]);
          break;
      }
      
    }

    public function getThuaDat($muaVuId)
    {
      // Get the currently authenticated user's ID
      // $userId = Auth::id();
      $userId = 1;

      $dsThuaDat = ThuaDat::where('nguoidung_id', '=', $userId)
        -> join('kehoachsanxuat_thuadat', 'kehoachsanxuat_thuadat.thuadat_id', '=', 'thuadat.id')
        -> where('kehoachsanxuat_thuadat.trangthaithamgia',  '=', 1)
        -> join('kehoachsanxuat', 'kehoachsanxuat.id', '=', 'kehoachsanxuat_thuadat.kehoachsanxuat_id')
        -> where('kehoachsanxuat.thoigianbatdau', '<=', date(now()))
        -> where('kehoachsanxuat.thoigianketthuc', '>=', date(now()))
        -> where('kehoachsanxuat.muavu_id', '=', $muaVuId)
        -> select('thuadat.*', 'kehoachsanxuat.id as kehoachsanxuat_id')
        -> get();

      switch (count($dsThuaDat)) {
        case '0':
          return view('farmer.nhatkycanhtac_khongthamgia');
          break;
          
        case '1':
          self::getQuytrinh($muaVuId, $dsThuaDat[0]->id);
          break;
        
        default:
          return view('farmer.nhatkycanhtac_chonthuadat', ['muaVuID' => $muaVuId, 'dsThuaDat' => $dsThuaDat]);
          break;
      }
    }

    public function getQuytrinh($muaVuId, $thuaDatId, $keHoachSanXuatId)
    {
      // Get the currently authenticated user's ID
      // $userId = Auth::id();
      $userId = 1;

      $dsGiaiDoanQuyTrinh = KeHoachSanXuat::findOrFail($keHoachSanXuatId)
        -> join('vungnguyenlieu', 'vungnguyenlieu.id', '=', 'kehoachsanxuat.vungnguyenlieu_id')
        -> join('nongsan', 'nongsan.id', '=', 'vungnguyenlieu.nongsan_id')
        -> join('quytrinh', 'quytrinh.nongsan_id', '=', 'nongsan.id')
        -> join('giaidoanquytrinh', 'giaidoanquytrinh.quytrinh_id', '=', 'quytrinh.id')
        -> select('giaidoanquytrinh.*')
        -> groupBy('giaidoanquytrinh.id')
        -> get();

      $thuaDat = ThuaDat::findOrFail($thuaDatId);
      $muaVu = MuaVu::findOrFail($muaVuId);
      $keHoachSanXuat = KeHoachSanXuat::findOrFail($keHoachSanXuatId);

      return view('farmer.nhatkycanhtac_quytrinh', [
        'dsGiaiDoanQuyTrinh' => $dsGiaiDoanQuyTrinh,
        'thuaDat' => $thuaDat,
        'muaVu' => $muaVu,
        'keHoachSanXuat' => $keHoachSanXuat
      ]);
    }
}
