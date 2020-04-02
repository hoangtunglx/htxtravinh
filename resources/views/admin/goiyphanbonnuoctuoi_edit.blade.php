@extends('admin.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('admin.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('admin.goiyphanbonnuoctuoi.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Tiêu chuẩn sản xuất</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Gợi ý phân bón nước tưới <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('admin.goiyphanbonnuoctuoi.update') }} " method="post" >
          @csrf()
          @method('PUT')
          <input type="hidden" name="goiyphanbonnuoctuoiid" value=" {{ $goiYPhanBonNuocTuoi->id }} ">
          <fieldset>

	
           <!-- 

       <div class="form-group">
          <label for="thongtinmoitruong_id">Thông tin môi trường <span class="text-danger font-weight-bold">*</span></label>
          <select id="thongtinmoitruong_id" class="form-control custom-select @error('thongtinmoitruong_id') is-invalid @enderror" name="thongtinmoitruong_id" required autofocus>
            <option value="">-- Choose --</option>
              @foreach($dsThongTinMoiTruong as $thongTinMoiTruong)
              <option value="{{ $thongTinMoiTruong->id }}" {{ ($goiYPhanBonNuocTuoi->thongtinmoitruong_id == $thongTinMoiTruong->id) ? 'selected' : '' }}>{{ $thongTinMoiTruong->id}}</option>
            @endforeach
          </select>
          @error('thongtinmoitruong_id')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
          @enderror
       
        </div>


       <div class="form-group">
          <label for="thongtinthoitiet_id">Thông tin môi trường <span class="text-danger font-weight-bold">*</span></label>
          <select id="thongtinthoitiet_id" class="form-control custom-select @error('thongtinthoitiet_id') is-invalid @enderror" name="thongtinthoitiet_id" required autofocus>
            <option value="">-- Choose --</option>
              @foreach($dsThongTinThoiTiet as $thongTinThoiTiet)
              <option value="{{ $thongTinMoiTruong->id }}" {{ ($goiYPhanBonNuocTuoi->thongtinthoitiet_id == $thongTinThoiTiet->id) ? 'selected' : '' }}>{{ $thongTinThoiTiet->id}}</option>
            @endforeach
          </select>
          @error('thongtinthoitiet_id')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
          @enderror
        </div>

         -->

            <div class="form-group">
              <label for="thongtingoiy"> Thông tin gợi ý </label>
              <textarea class="form-control @error('thongtingoiy') is-invalid @enderror" id="thongtingoiy" name="thongtingoiy" rows="10" placeholder="Thông tin gợi ý" autofocus>{{old('thongtingoiy', $goiYPhanBonNuocTuoi->thongtingoiy)}}</textarea>
              @error('thongtingoiy')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
          </div>

			    
		   <div class="form-group">
              <label for="ghichu"> Ghi chú </label>
              <textarea class="form-control @error('ghichu') is-invalid @enderror" id="ghichu" name="ghichu" rows="10" placeholder="Ghi chú" autofocus>{{old('ghichu', $goiYPhanBonNuocTuoi->ghichu)}}</textarea>
              @error('ghichu')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>




            <div class="text-center">
              <button class="btn btn-primary" type="submit"> <i class="fa fa-save"></i> Lưu </button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
