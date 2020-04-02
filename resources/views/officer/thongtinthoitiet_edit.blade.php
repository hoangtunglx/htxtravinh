@extends('officer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('officer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('officer.thongtinthoitiet.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Thông Tin Thời Tiết</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Thông tin thời tiết <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('officer.thongtinthoitiet.update') }} " method="post" >
          @csrf()
          @method('PUT')
          <input type="hidden" name="thongtinthoitietid" value=" {{ $thongTinThoiTiet->id }} ">
          <fieldset>

		      <div class="form-group">
          <label for="vungnguyenlieu_id"> Vùng nguyên liệu <span class="text-danger font-weight-bold">*</span></label>
          
      <select id="vungnguyenlieu_id" class="form-control custom-select @error('vungnguyenlieu_id') is-invalid @enderror" name="vungnguyenlieu_id" required autofocus>
            <option value="">-- Choose --</option>
               @foreach($dsVungNguyenLieu as $vungNguyenLieu)
              <option value="{{ $vungNguyenLieu->id }}" {{ ($thongTinThoiTiet->vungnguyenlieu_id == $vungNguyenLieu->id) ? 'selected' : '' }}>{{ $vungNguyenLieu->tenvungnguyenlieu}}</option>
            @endforeach
          </select>
          @error('vungnguyenlieu_id')
            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
          @enderror
        </div>

              <div class="form-group">
              <label for="luongmua">Lượng mưa <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('luongmua') is-invalid @enderror" id="luongmua" name="luongmua" value="{{old('luongmua',  $thongTinThoiTiet->luongmua)}}" placeholder="Lượng mưa" autofocus>
              @error('luongmua')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
        <div class="form-group">
              <label for="sucgio">Sức gió <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('sucgio') is-invalid @enderror" id="sucgio" name="sucgio" value="{{old('doamkhongkhi',  $thongTinThoiTiet->sucgio)}}" placeholder="Sức gió" autofocus>
              @error('sucgio')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
        <div class="form-group">
              <label for="huonggio">Hướng gió <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('huonggio') is-invalid @enderror" id="huonggio" name="huonggio" value="{{old('huonggio',  $thongTinThoiTiet->huonggio)}}" placeholder="Độ ẩm không khí" autofocus>
              @error('doamkhongkhi')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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