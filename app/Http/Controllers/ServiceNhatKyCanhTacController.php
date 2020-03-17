<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThuaDat;

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
        -> select('thuadat.*')
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

    public function getQuytrinh($muaVuId, $thuaDatId)
    {
      // Get the currently authenticated user's ID
      // $userId = Auth::id();
      $userId = 1;

      return view('farmer.nhatkycanhtac_quytrinh');

    }
}
