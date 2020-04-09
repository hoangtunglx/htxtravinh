@extends('officer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('officer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
        </li>
      </ol>
    </nav>
    <a href=" {{ route('officer.vungnguyenlieu.create') }} "> <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>

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
              <th> Nông sản</th>
			  <th> Hợp tác xã</th>
              <th> Tên vùng nguyên liệu </th>
              <th> Tổng diện tích </th>
              <th> Tổng số thửa </th>
              <th> Tổng số thành viên</th>
			  <th> Vị trí</th>
              <th style="width:100px; min-width:100px;"> &nbsp; </th>
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
            <td class="text-center">
              <form action="{{route('officer.vungnguyenlieu.delete', ['id'=>$vungNguyenLieu->id])}}" method="post">
                @csrf()
                @method('DELETE')
                <a href="{{ route('officer.vungnguyenlieu.edit', ['id' => $vungNguyenLieu->id]) }}" class="btn btn-warning btn-sm btn-icon " title="Chỉnh sửa"><i class="fa fa-pencil-alt"></i></a>
                <button type="submit" class="btn btn-danger btn-delete btn-sm btn-icon" title="Xóa"> <i class="fa fa-trash"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
	  <div class="card-footer">
          <a href="{{ route('officer.vungnguyenlieu.create') }}" class="card-footer-item btn-outline-success" title="Thêm mới"> <i class="fa fa-plus-circle"></i> Thêm mới </a>
      </div>
    </div>
  </div>
</div>

@endsection