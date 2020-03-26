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
      <h1 class="page-title mr-sm-auto"> Loại phân bón </h1>
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
              <th> Tên loại phân bón </th>
              <th> Mô tả </th>
            </tr>
          </thead>
          @foreach($dsLoaiPhanBon ?? [] as $loaiPhanBon)
          <tr>
            <td class="text-center"> {{ $loop->iteration }} </td>
            <td> {{ $loaiPhanBon->tenloaiphanbon }} </td>
            <td> {{ $loaiPhanBon->mota }} </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
