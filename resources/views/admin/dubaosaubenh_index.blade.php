
@extends('admin.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('admin.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
        </li>
      </ol>
    </nav>
    <a href=" {{ route('admin.dubaosaubenh.create') }} "> <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Dự báo sâu bệnh </h1>
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
              <th> Tên sâu bệnh </th>
              <th> Vùng sâu bệnh </th>
              <th> Mùa vụ </th>
              <th> Thông tin dự báo </th>
              <th> Ghi chú </th>
			       <th> Người dự báo </th>

              <th style="width:100px; min-width:100px;"> &nbsp; </th>
            </tr>
          </thead>
          <tbody>
              @foreach($dsDuBaoSauBenh   as $duBaoSauBenh)
            <tr>
              <td class="text-center"> {{ $loop->iteration }} </td>
              <td>{{ $duBaoSauBenh->SauBenh->tensaubenh}} </td>
			       <td> {{ $duBaoSauBenh->VungNguyenLieu->tenvungnguyenlieu }} </td>
              <td> {{ $duBaoSauBenh->MuaVu->tenmuavu }} </td>
              <td> {{ $duBaoSauBenh->thongtindubao}} </td>
              <td> {{ $duBaoSauBenh->ghichu }} </td>
              <td> {{$duBaoSauBenh->NguoiDung->name}} </td>
              <td class="text-center">
                <form action="{{route('admin.dubaosaubenh.delete', ['id'=>$duBaoSauBenh->id])}}" method="post">
                  @csrf()
                  @method('DELETE')
                  <a href="{{ route('admin.dubaosaubenh.edit', ['id' => $duBaoSauBenh->id]) }}" class="btn btn-warning btn-sm btn-icon" title="Chỉnh sửa"><i class="fa fa-pencil-alt"></i></a>
                  <button type="submit" class="btn btn-danger btn-delete btn-sm btn-icon" title="Xóa"> <i class="fa fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
          <a href="{{ route('admin.dubaosaubenh.create') }}" class="card-footer-item btn-outline-success" title="Thêm mới"> <i class="fa fa-plus-circle"></i> Thêm mới </a>
      </div>
    </div>
  </div>
</div>

@endsection