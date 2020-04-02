
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
    <a href=" {{ route('officer.goiyphanbonnuoctuoi.create') }} "> <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Phương tiện sản xuất </h1>
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
              <th> Thông tin thời tiết </th>
			  <th> Thông tin môi trường </th>
              <th> Tiêu để </th>
              <th> Nội dung gợi ý </th>
              <th> Thời gian </th>
              <th> Người gợi ý </th>
              
              <th style="width:100px; min-width:100px;"> &nbsp; </th>
            </tr>
          </thead>
          <tbody>
              @foreach($dsGoiYPhanBonNuocTuoi ?? [] as $goiYPhanBonNuocTuoi)
            <tr>
              <td class="text-center"> {{ $loop->iteration }} </td>
              <td> {{ $goiYPhanBonNuocTuoi->thongtinmoitruong_id}} </td>
			 <td> {{ $goiYPhanBonNuocTuoi->thongtinthoitiet_id}} </td>
              <td> {{ $goiYPhanBonNuocTuoi->tieude}} </td>
               <td> {{ $goiYPhanBonNuocTuoi->thongtingoiy}} </td>
             <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $goiYPhanBonNuocTuoi->created_at)->format('d/m/Y H:i:s') }}</td>
              <td> {{ $goiYPhanBonNuocTuoi->nguoidung_id}} </td>
              <td class="text-center">
                <form action="{{route('officer.goiyphanbonnuoctuoi.delete', ['id'=>$goiYPhanBonNuocTuoi->id])}}" method="post">
                  @csrf()
                  @method('DELETE')
                  <a href="{{ route('officer.goiyphanbonnuoctuoi.edit', ['id' => $goiYPhanBonNuocTuoi->id]) }}" class="btn btn-warning btn-sm btn-icon" title="Chỉnh sửa"><i class="fa fa-pencil-alt"></i></a>
<button type="submit" class="btn btn-danger btn-delete btn-sm btn-icon" title="Xóa"> <i class="fa fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
          <a href="{{ route('officer.goiyphanbonnuoctuoi.create') }}" class="card-footer-item btn-outline-success" title="Thêm mới"> <i class="fa fa-plus-circle"></i> Thêm mới </a>
      </div>
    </div>
  </div>
</div>

@endsection
