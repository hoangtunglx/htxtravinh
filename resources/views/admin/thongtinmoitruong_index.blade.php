
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
    <a href=" {{ route('admin.thongtinmoitruong.create',['id' => $dsThuaDat->id]) }} "> <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Thông tin môi trường </h1>
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
              <th> Nhiệt độ </th>
              <th> Độ ẩm không khí </th>
              <th> Độ ẩm đất</th>
              <th> Độ mặn </th>
              <th> Độ PH </th>
              <th> Mực nước </th>
              <th> Tình trạng </th>
              <th> Người cập nhật </th>
              <th> Thời giam </th>
              <th style="width:100px; min-width:100px;"> &nbsp; </th>
            </tr>
          </thead>
          <tbody>
              @foreach($dsThongTinMoiTruong  as $moiTruong)
            <tr>
              <td class="text-center"> {{ $loop->iteration }} </td>

                            <td>{{ $moiTruong->nhietdo }}°C</td>
                            <td>{{ $moiTruong->doamkhongkhi  }}%</td>
                            <td>{{ $moiTruong->doamdat }}%</td>
                            <td>{{ $moiTruong->doman }}%</td>
                            <td>{{ $moiTruong->doph }}%</td>
                            <td>{{ $moiTruong->mucnuoc }}ml</td>
                            <td>{{ $moiTruong->tinhtrang }}</td>
                            <td>{{$moiTruong->name}}</td>
                            <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s',

                            $moiTruong->created_at)->format('d/m/Y H:i:s') }}</td>

              <td class="text-center">
                <!-- <form action="{{route('admin.thongtinmoitruong.delete', ['id'=>$moiTruong->id])}}" method="post"> -->
                  <!-- @csrf() -->
                   <!-- @method('DELETE') -->
                <!--   <input type="hidden" name="thongtinmoitruongid" value=" {{ $moiTruong->id }} ">
                  <input type="hidden" name="thuadat_id" value=" {{ $moiTruong->thuadat_id }} "> -->
                  <a href="{{ route('admin.thongtinmoitruong.edit', ['id' => $moiTruong->id]) }}" class="btn btn-warning btn-sm btn-icon" title="Chỉnh sửa"><i class="fa fa-pencil-alt"></i></a>
              <a href="{{route('admin.thongtinmoitruong.delete', ['id'=>$moiTruong->id])}}" type="submit" class="btn btn-danger btn-delete btn-sm btn-icon" title="Xóa"> <i class="fa fa-trash"></i></button>
               <!--  </form> -->
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
          <a href="{{ route('admin.thongtinmoitruong.create',['id' => $dsThuaDat->id]) }}" class="card-footer-item btn-outline-success" title="Thêm mới"> <i class="fa fa-plus-circle"></i> Thêm mới </a>
      </div>
    </div>
  </div>
</div>

@endsection
