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
      <h1 class="page-title mr-sm-auto"> Thuốc bảo vệ thực vật </h1>
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
              <th> Loại thuốc BVTV </th>
              <th> Tên thuốc </th>
              <th> Mục đích </th>
              <th> Nguồn gốc </th>
              <th> Thành phần hàm lượng </th>
              <th> Nhà cung cấp </th>
              <th> Mô tả </th>
            </tr>
          </thead>
          @foreach($dsThuocBvtv ?? [] as $thuocBvtv)
          <tr>
            <td class="text-center"> {{ $loop->iteration }} </td>
            <td> {{ $thuocBvtv->loaithuocbvtv->tenloaithuocbvtv }} </td>
            <td> {{ $thuocBvtv->tenthuocbvtv }} </td>
            <td> {{ $thuocBvtv->mucdich }} </td>
            <td> {{ $thuocBvtv->nguongoc }} </td>
            <td> {{ $thuocBvtv->thanhphanhamluong }} </td>
            <td> {{ $thuocBvtv->nhacungcap }} </td>
            <td> {{ $thuocBvtv->mota }} </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>

@endsection