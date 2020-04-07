@extends('manager.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('manager.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Thông tin thị trường </h1>
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
              <th> Nông sản </th>
              <th> Ngày cập nhật </th>
              <th> Đơn giá </th>
              <th> Chính sách khuyến mãi </th>
            </tr>
          </thead>
          <tbody>
            @foreach($dsThongTinThiTruong ?? [] as $thongTinThiTruong)
            <tr>
              <td class="text-center"> {{ $loop->iteration }} </td>
              <td> {{ $thongTinThiTruong->NongSan->tennongsan }} </td>
              <td> {{ \Carbon\Carbon::parse($thongTinThiTruong->ngaycapnhat)->format('d/m/Y')}}
   </td>
              <td> {{ number_format($thongTinThiTruong->dongia) }} {{ 'VND' }} </td>
              <td> {{ $thongTinThiTruong->chinhsachkhuyenmai }} </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
