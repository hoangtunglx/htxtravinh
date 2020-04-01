

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
      <h1 class="page-title mr-sm-auto"> Sâu bệnh </h1>
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
        			<th> Đặc điểm </th>
        			<th> Cây trồng tấn công </th>
        			<th> Dấu hiệu </th>
        			<th> Biện pháp phòng tránh </th>
        			<th> Ghi chú </th>
              <th style="width:100px; min-width:100px;"> &nbsp; </th>
            </tr>
          </thead>
          <tbody>
             @foreach($dsSauBenh ?? [] as $sauBenh)
            <tr>
              <td class="text-center"> {{ $loop->iteration }} </td>
              <td> {{ $sauBenh->tensaubenh}} </td>
          		<td> {{ $sauBenh->dacdiem }} </td>
          		<td> {{ $sauBenh->caytrongtancong }} </td>
          		<td> {{ $sauBenh->dauhieu}} </td>
          		<td> {{ $sauBenh->bienphapphongtranh }} </td>
          		<td> {{ $sauBenh->ghichu }} </td>
              <td class="text-center">

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
