
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
    <a href=" {{ route('admin.goiyphanbonnuoctuoi.create') }} "> <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Gợi ý phân bón nước tưới </h1>
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
              <th width="17%" >Thông tin môi trường</th>
			        <th width="15%">Thông tin thời tiết </th>
              <th width="20%"> Nội dung gợi ý </th>
			         <th width="20%" > ghi chú </th>
              <th width="18%"> Thời gian </th>
              <th width="10%>"> Người gợi ý </th>
              
              <th style="width:100px; min-width:100px;"> &nbsp; </th>
            </tr>
          </thead>
          <tbody>
              @foreach($dsGoiYPhanBonNuocTuoi ?? [] as $goiYPhanBonNuocTuoi)
            <tr>
              <td class="text-center"> {{ $loop->iteration }} </td>
              <td>
                Độ mặn: {{$goiYPhanBonNuocTuoi->ThongTinMoiTruong->doman}}%<br>
                Độ PH: {{$goiYPhanBonNuocTuoi->ThongTinMoiTruong->doph}}%<br>
                Độ ẩm đất: {{$goiYPhanBonNuocTuoi->ThongTinMoiTruong->doph}}% </td>
			       <td>Lượng mưa: {{ $goiYPhanBonNuocTuoi->ThongTinThoiTiet->luongmua}}ml </td>
             <td> {{ $goiYPhanBonNuocTuoi->thongtingoiy}} </td>
			       <td> {{ $goiYPhanBonNuocTuoi->ghichu}} </td>
             <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $goiYPhanBonNuocTuoi->created_at)->format('d/m/Y H:i:s') }}</td>
              <td> {{$goiYPhanBonNuocTuoi->NguoiDung->name}} </td>
              <td class="text-center">
                <form action="{{route('admin.goiyphanbonnuoctuoi.delete', ['id'=>$goiYPhanBonNuocTuoi->id])}}" method="post">
                  @csrf()
                  @method('DELETE')
                  <a href="{{ route('admin.goiyphanbonnuoctuoi.edit', ['id' => $goiYPhanBonNuocTuoi->id]) }}" class="btn btn-warning btn-sm btn-icon" title="Chỉnh sửa"><i class="fa fa-pencil-alt"></i></a>
<button type="submit" class="btn btn-danger btn-delete btn-sm btn-icon" title="Xóa"> <i class="fa fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
          <a href="{{ route('admin.goiyphanbonnuoctuoi.create') }}" class="card-footer-item btn-outline-success" title="Thêm mới"> <i class="fa fa-plus-circle"></i> Thêm mới </a>
      </div>
    </div>
  </div>
</div>

@endsection
