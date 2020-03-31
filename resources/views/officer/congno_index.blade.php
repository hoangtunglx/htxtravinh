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
    <a href=" {{ route('officer.congno.create') }} "> <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Công nợ </h1>
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
              <th> Đơn hàng </th>
              <th> Đơn thuê </th>
              <th> Mùa vụ </th>
              <th> Số tiền còn nợ </th>
              <th> Ngày tạo </th>
              <th style="width:100px; min-width:100px;"> &nbsp; </th>
            </tr>
          </thead>
          <tbody>
            @foreach($dsCongNo ?? [] as $congNo)
            <tr>
              <td class="text-center"> {{ $loop->iteration }} </td>
              <td> {{ $congNo->NguoiDung->hoten }} </td>
              <td> {{ $congNo->donhang_id }} </td>
              <td> {{ $congNo->donthue_id }} </td>
              <td> {{ $congNo->MuaVu->tenmuavu }} </td>
              <td> {{ number_format($congNo->sotienconno)  }} {{'VND'}} </td>
              <td> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $congNo->created_at)->format('d/m/Y H:i:s')}} </td>
              <td class="text-center">
                <form action="{{route('officer.congno.delete', ['id'=>$congNo->id])}}" method="post">
                  @csrf()
                  @method('DELETE')
                  <a href="{{ route('officer.congno.edit', ['id' => $congNo->id]) }}" class="btn btn-warning btn-sm btn-icon" title="Chỉnh sửa"><i class="fa fa-pencil-alt"></i></a>
                  <button type="submit" class="btn btn-danger btn-delete btn-sm btn-icon" title="Xóa"> <i class="fa fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
          <a href="{{ route('officer.congno.create') }}" class="card-footer-item btn-outline-success" title="Thêm mới"> <i class="fa fa-plus-circle"></i> Thêm mới </a>
      </div>
    </div>
  </div>
</div>

@endsection
