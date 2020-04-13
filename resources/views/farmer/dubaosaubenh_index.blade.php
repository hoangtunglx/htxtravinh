
@extends('admin.layouts.master')

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
              <th width="10%"> sâu bệnh </th>
              <th width="10%"> Vùng nguyên liệu </th>
              <th width="10%"> Mùa vụ </th>
              <th width="25%"> Thông tin dự báo </th>
              <th width="25%"> Ghi chú </th>
             <th width="10%"> Người dự báo </th>
              <th width="10%"> thời gian </th>


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
              <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s',

                            $duBaoSauBenh->created_at)->format('d/m/Y H:i:s') }}</td>
          
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
   
    </div>
  </div>
</div>

@endsection
