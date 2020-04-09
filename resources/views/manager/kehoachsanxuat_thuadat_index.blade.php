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
      <h1 class="page-title mr-sm-auto"> Kế hoạch sản xuất thửa đất </h1>
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
              <th> Kế hoạch sản xuất</th>
			  <th> Thửa đất</th>
			  <th> Kế hoạch sản xuất thửa đất</th>
              <th> Diện tích </th>
              <th> Duyệt </th>
              <th> Trạng thái tham gia</th>
              
            </tr>
          </thead>
          @foreach($dsKeHoachSanXuat_ThuaDat ?? [] as $keHoachSanXuat_ThuaDat)
          <tr>
            <td class="text-center"> {{ $loop->iteration }} </td>
            <td> {{ $keHoachSanXuat_ThuaDat->kehoachsanxuat->tenkehoachsanxuatmuavu }}</td>			
			<td> {{ $keHoachSanXuat_ThuaDat->thuadat->tenthuadat }} </td>
			<td> {{ $keHoachSanXuat_ThuaDat->tenkehoachsanxuat_thuadat }} </td>
            <td> {{ $keHoachSanXuat_ThuaDat->dientich }} </td>
			<!--<td> {{ $keHoachSanXuat_ThuaDat->duyet }} </td>
			<td> {{ $keHoachSanXuat_ThuaDat->trangthaithamgia }} </td>-->
			<td class="text-center">
				@if($keHoachSanXuat_ThuaDat->duyet == 1)
					<i class="fas fa-check">Đã duyệt</i>
				@else
					<i class="fas fa-ban text-danger">Chưa duyệt</i>
				@endif
			</td>
			<td class="text-center">
				@if($keHoachSanXuat_ThuaDat->trangthaithamgia == 1)
					<i class="fas fa-check">Tham gia</i>
				@else
					<i class="fas fa-ban text-danger">Không tham gia</i>
				@endif
			</td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>

@endsection