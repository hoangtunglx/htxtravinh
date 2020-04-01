
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
				<td> {{ $thongTinThoiTiet->vungnguyenlieu_id}} </td>
				<td> {{ $thongTinThoiTiet->luongmua }} </td>
              <td> {{ $thongTinThoiTiet->sucgio }} </td>
              <td> {{ $thongTinThoiTiet->huonggio}} </td>
                <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $thongTinThoiTiet->created_at)->format('d/m/Y H:i:s') }}</td>
              <td>{{$thongTinThoiTiet->NguoiDung->name}} </td>
             
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    
    </div>
  </div>
</div>

@endsection
