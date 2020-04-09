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
      <h1 class="page-title mr-sm-auto"> Thửa đất </h1>
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
              <th> Người dùng </th>
              <th> Tên thửa đất </th>
              <th> Tờ bản đồ </th>
              <th> Vị trí </th>
              <th> Diện tích </th>
              <th> Đặc điểm thổ nhưỡng </th>
            </tr>
          </thead>
          @foreach($dsThuaDat ?? [] as $thuaDat)
          <tr>
            <td class="text-center"> {{ $loop->iteration }} </td>
            <td> {{ $thuaDat->nguoidung->hoten }} </td>
            <td> {{ $thuaDat->tenthuadat }} </td>
			<td> {{ $thuaDat->tobando }} </td>
			<td> {{ $thuaDat->vitri }} </td>
			<td> {{ $thuaDat->dientich }} </td>
			<td> {{ $thuaDat->dacdiemthonhuong }} </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>


@endsection