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
      <h1 class="page-title mr-sm-auto"> Phân bón </h1>
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
              <th> Loại phân bón </th>
              <th> Tên phân bón </th>
              <th> Đặc tính </th>
              <th> Thành phần hàm lượng </th>
              <th> Nhà cung cấp </th>
              <th> Mô tả </th>
            </tr>
          </thead>
          @foreach($dsPhanBon ?? [] as $phanBon)
          <tr>
            <td class="text-center"> {{ $loop->iteration }} </td>
            <td> {{ $phanBon->loaiphanbon->tenloaiphanbon}} </td>
            <td> {{ $phanBon->tenphanbon }} </td>
            <td> {{ $phanBon->dactinh }} </td>
            <td> {{ $phanBon->thanhphanhamluong }} </td>
            <td> {{ $phanBon->nhacungcap }} </td>
            <td> {{ $phanBon->mota }} </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
@endsection