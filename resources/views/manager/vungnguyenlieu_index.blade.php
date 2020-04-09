@extends('manager.layouts.master')

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
      <h1 class="page-title mr-sm-auto"> Vùng nguyên liệu </h1>
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
              <th> Hợp tác xã </th>
              <th> Tên vùng nguyên liệu </th>
              <th> Tổng diện tích </th>
              <th> Tổng số thửa </th>
			  <th> Tổng số thành viên </th>
			  <th> Vị trí </th>
            </tr>
          </thead>
          @foreach($dsVungNguyenLieu ?? [] as $vungNguyenLieu)
          <tr>
            <td class="text-center"> {{ $loop->iteration }} </td>
            <td> {{ $vungNguyenLieu->nongsan->tennongsan }} </td>
			<td> {{ $vungNguyenLieu->hoptacxa->tenhtx }} </td>
            <td> {{ $vungNguyenLieu->tenvungnguyenlieu }} </td>
			<td> {{ $vungNguyenLieu->tongdientich }} </td>
			<td> {{ $vungNguyenLieu->tongsothua }} </td>
			<td> {{ $vungNguyenLieu->tongsothanhvien }} </td>
			<td> {{ $vungNguyenLieu->vitri }} </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>


@endsection