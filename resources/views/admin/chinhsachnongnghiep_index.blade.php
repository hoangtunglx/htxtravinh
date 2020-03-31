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
    <a href=" {{ route('admin.chinhsachnongnghiep.create') }} "> <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>

    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Chính sách nông nghiệp </h1>
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
              <th class="text-center" width="5%"> # </th>
              <th width="30%"> Tên chính sách </th>
              <th width="15%"> Số văn bản </th>
              <th width="15%"> Người đăng </th>
              <th width="10%"> HTX </th>
              <th width="10%"> Tập tin </th>
              <th width="15%"> Ngày đăng </th>           
              <th style="width:100px; min-width:100px;"> &nbsp; </th>
            </tr>
          </thead>
          @foreach($dsChinhSachNongNghiep ?? [] as $chinhSachNongNghiep)
          <tr>
            <td class="text-center"> {{ $loop->iteration }} </td>
            <td> {{ $chinhSachNongNghiep->tenchinhsach }} </td>
            <td> {{ $chinhSachNongNghiep->sovanban }} </td>
            <td> {{ $chinhSachNongNghiep->nguoidung_id }} </td>
            <td> {{ $chinhSachNongNghiep->HopTacXa->tenhtx }} </td>
            <td class="text-center">
              <form>  
                <a href="{{ route('admin.chinhsachnongnghiep.xemFile', ['file' => $chinhSachNongNghiep->taptin]) }}" class="btn btn-primary btn-sm btn-icon " title="Xem tập tin"><i class="fa fa-eye"></i></a>
                <a href="{{ route('admin.chinhsachnongnghiep.download', ['file' => $chinhSachNongNghiep->taptin]) }}" class="btn btn-success btn-sm btn-icon " title="Tải về"><i class="fa fa-file-download"></i></a><br>
                {{ $chinhSachNongNghiep->taptin }}
              </form>
            </td>
            <td> {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $chinhSachNongNghiep->created_at)->format('d/m/Y H:i:s') }} </td>
            <td class="text-center">
              <form action="{{route('admin.chinhsachnongnghiep.delete', ['id'=>$chinhSachNongNghiep->id])}}" method="post">
                @csrf()
                @method('DELETE')
                <a href="{{ route('admin.chinhsachnongnghiep.edit', ['id' => $chinhSachNongNghiep->id]) }}" class="btn btn-warning btn-sm btn-icon " title="Chỉnh sửa"><i class="fa fa-pencil-alt"></i></a>
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