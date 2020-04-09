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
      <h1 class="page-title mr-sm-auto"> Doanh nghiệp </h1>
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
              <th> Tên doanh nghiệp </th>
              <th> Người đại diện </th>
			  <th> Địa chỉ </th>
			  <th> Số điện thoại </th>
			  <th> Vị trí </th>
            </tr>
          </thead>
          <tbody>
            @foreach($dsDoanhNghiep ?? [] as $doanhNghiep)
            <tr>
              <td class="text-center"> {{ $loop->iteration }} </td>
			  <td> {{ $doanhNghiep->tendoanhnghiep }} </td>
			  <td> {{ $doanhNghiep->nguoidaidien }} </td>
			  <td> {{ $doanhNghiep->diachi }} </td>
			  <td> {{ $doanhNghiep->sodienthoai }} </td>
			  <td> {{ $doanhNghiep->vitri }} </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection