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
    <a href=" {{ route('admin.nongsan.create') }} "> <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>

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
              <th> Tên Nông sản </th>
              <th> Loại nông sản </th>
              <th> Mô tả </th>
              <th style="width:100px; min-width:100px;"> &nbsp; </th>
            </tr>
          </thead>
          @foreach($dsNongSan ?? [] as $nongSan)
          <tr>
            <td class="text-center"> {{ $loop->iteration }} </td>
            <td> {{ $nongSan->tennongsan }} </td>
            <td> {{ $nongSan->LoaiNongSan->tenloainongsan }} </td>
            <td> {{ $nongSan->mota }} </td>
            <td class="text-center">
              <form action="{{route('admin.nongsan.delete', ['id'=>$nongSan->id])}}" method="post">
                @csrf()
                @method('DELETE')
                <a href="{{ route('admin.nongsan.edit', ['id' => $nongSan->id]) }}" class="btn btn-warning btn-sm btn-icon " title="Chỉnh sửa"><i class="fa fa-pencil-alt"></i></a>
                <button type="submit" class="btn btn-danger btn-delete btn-sm btn-icon" title="Xóa"> <i class="fa fa-trash"></i></button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>

@endsection