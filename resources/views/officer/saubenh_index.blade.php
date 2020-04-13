
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
    <a href=" {{ route('officer.saubenh.create') }} "> <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Thông tin sâu bệnh </h1>
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
              <th width="15%" > Tên sâu bệnh </th>
              <th width="10%"> Đặc điểm </th>
              <th width="15%" > Cây trồng tấn công </th>
              <th width="20%" > Dấu hiệu </th>
              <th width="20%"> Biện pháp phòng tránh </th>
              <th width="20%"> Ghi chú </th>
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
                <form action="{{route('officer.saubenh.delete', ['id'=>$sauBenh->id])}}" method="post">
                  @csrf()
                  @method('DELETE')
                  <a href="{{ route('officer.saubenh.edit', ['id' => $sauBenh->id]) }}" class="btn btn-warning btn-sm btn-icon" title="Chỉnh sửa"><i class="fa fa-pencil-alt"></i></a>
                <button type="submit" class="btn btn-danger btn-delete btn-sm btn-icon" title="Xóa"> <i class="fa fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
          <a href="{{ route('officer.saubenh.create') }}" class="card-footer-item btn-outline-success" title="Thêm mới"> <i class="fa fa-plus-circle"></i> Thêm mới </a>
      </div>
    </div>
  </div>
</div>

@endsection
