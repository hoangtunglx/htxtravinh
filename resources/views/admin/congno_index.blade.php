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
            </tr>
          </thead>
          @foreach($dsCongNo ?? [] as $congNo)
          <tr>
            <td class="text-center"> {{ $loop->iteration }} </td>
            <td> {{ $congNo->NguoiDung->hoten }} </td>
            <td> {{ $congNo->donhang_id }} </td>
            <td> {{ $congNo->donthue_id }} </td>
<<<<<<< HEAD
            <td> {{ $congNo->muavu_id }} </td>
=======
            <td> {{ $congNo->MuaVu->tenmuavu }} </td>
>>>>>>> 6745f17d48ab84ebf1090075ffe3951422a1daf0
            <td> {{ number_format($congNo->sotienconno) }} {{'VND'}} </td>
            <td> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $congNo->created_at)->format('d/m/Y H:i:s')}} </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>

@endsection