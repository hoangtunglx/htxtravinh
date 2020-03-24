@extends('farmer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('farmer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Phương tiện sản xuất </h1>
      <div id="dt-buttons" class="btn-toolbar"></div>
    </div>
  </header>
  <div class="page-section">

    <div class="card card-fluid">

      <div class="card-body">

        @include('layouts.blocks.flash_message')
        <table id="table-datatable-default" class="table">
          <thead>
            <tr>
              <th class="text-center"> # </th>
              <th> Mã số </th>
              <th> HTX </th>
              <th> Loại PT </th>
              <th> Tên PT </th>
              <th> Ngày mua </th>
              <th> NSX </th>
              <th> Năm SX </th>
              <th> Nước SX </th>
              <th> Diện tích </th>
              <th> Vị trí </th>
              <th> Mô tả </th>
              <th> Trạng thái </th>
            </tr>
          </thead>
          <tbody>
          @foreach($dsPhuongTienSX ?? [] as $phuongTienSX)
            <tr>
              <td class="text-center"> {{ $loop->iteration }} </td>
              <td> {{ $phuongTienSX->masophuongtien }} </td>
              <td> {{ $phuongTienSX->hoptacxa_id }} </td>
              <td> {{ $phuongTienSX->LoaiPhuongTien->tenloaiphuongtien }} </td>
              <td> {{ $phuongTienSX->tenphuongtien }} </td>
              <td> {{ $phuongTienSX->ngaymua }} </td>
              <td> {{ $phuongTienSX->nhasanxuat }} </td>
              <td> {{ $phuongTienSX->namsanxuat }} </td>
              <td> {{ $phuongTienSX->nuocsanxuat }} </td>
              <td> {{ $phuongTienSX->dientich }} </td>
              <td> {{ $phuongTienSX->vitri }} </td>
              <td> {{ $phuongTienSX->mota }} </td>
              <td> {{ $phuongTienSX->trangthai }} </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
