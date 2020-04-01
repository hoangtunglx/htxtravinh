
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
    <a href=" {{ route('manager.dubaosaubenh.create') }} "> <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>
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
              <td> {{ $duBaoSauBenh->saubenh_id}} </td>
			<td> {{ $duBaoSauBenh->vungnguyenlieu_id }} </td>
              <td> {{ $duBaoSauBenh->muavu_id }} </td>
              <td> {{ $duBaoSauBenh->thongtindubao}} </td>
              <td> {{ $duBaoSauBenh->ghichu }} </td>
              <td> {{$duBaoSauBenh->NguoiDung->name}} </td>
          
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
   
    </div>
  </div>
</div>

@endsection
