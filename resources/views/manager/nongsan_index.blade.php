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
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Nông sản </h1>
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
              <th> Tên nông sản </th>
              <th> Loại nông sản </th>
              <th> Mô tả </th>
            </tr>
          </thead>
          <tbody>
            @foreach($dsNongSan ?? [] as $nongSan)
            <tr>
              <td class="text-center"> {{ $loop->iteration }} </td>
              <td> {{ $nongSan->tennongsan }} </td>
              <td> {{ $nongSan->LoaiNongSan->tenloainongsan }} </td>
              <td> {{ $nongSan->mota }} </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
