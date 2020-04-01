
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
    <a href=" {{ route('admin.thongtinthoitiet.create') }} "> <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Thông tin thời tiết </h1>
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
              <th> Vùng nguyên liệu</th>
              <th> Lượng mưa </th>
              <th> Sức gió </th>
              <th> Hướng gió </th>
              <th> Ngày cập nhật </th>
			        <th> Người cập nhật </th>
              <th style="width:100px; min-width:100px;"> &nbsp; </th>
            </tr>
          </thead>
          <tbody>
              @foreach($dsThongTinThoiTiet ?? [] as $thongTinThoiTiet)
            <tr>
				<td class="text-center"> {{ $loop->iteration }} </td>
				     <td> {{ $thongTinThoiTiet->VungNguyenLieu->tenvungnguyenlieu}} </td>
				      <td> {{ $thongTinThoiTiet->luongmua }} </td>
              <td> {{ $thongTinThoiTiet->sucgio }} </td>
              <td> {{ $thongTinThoiTiet->huonggio}} </td>
                <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $thongTinThoiTiet->created_at)->format('d/m/Y H:i:s') }}</td>
              <td> {{$thongTinThoiTiet->NguoiDung->name}} </td>
              <td class="text-center">
                <form action="{{route('admin.thongtinthoitiet.delete', ['id'=>$thongTinThoiTiet->id])}}" method="post">
                  @csrf()
                  @method('DELETE')
                  <a href="{{ route('admin.thongtinthoitiet.edit', ['id' => $thongTinThoiTiet->id]) }}" class="btn btn-warning btn-sm btn-icon" title="Chỉnh sửa"><i class="fa fa-pencil-alt"></i></a>
<button type="submit" class="btn btn-danger btn-delete btn-sm btn-icon" title="Xóa"> <i class="fa fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
          <a href="{{ route('admin.thongtinthoitiet.create') }}" class="card-footer-item btn-outline-success" title="Thêm mới"> <i class="fa fa-plus-circle"></i> Thêm mới </a>
      </div>
    </div>
  </div>
</div>

@endsection
