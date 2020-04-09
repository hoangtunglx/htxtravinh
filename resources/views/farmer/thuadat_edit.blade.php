@extends('farmer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('farmer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('farmer.thuadat.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Thửa đất</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Thửa đất <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('farmer.thuadat.update') }} " method="post">
          @csrf()
          @method('PUT')
          <input type="hidden" name="thuadatid" value=" {{ $thuaDat->id }} ">

          <fieldset>
			<div class="form-group">
                <label for="nguoidung_id">Người dùng <abbr title="Required">*</abbr></label>
                <select class="form-control" id="nguoidung_id" name="nguoidung_id">
					<option value="">== Chọn ID ==</option>
					@foreach($nguoiDung as $value)
					  <option value="{{ $value->id }}" {{ ($thuaDat->nguoidung_id == $value->id) ? 'selected' : '' }}>{{ $value->hoten }}</option>
					@endforeach
				</select>
            </div>
            <div class="form-group">
              <label for="tenthuadat">Tên thửa đất <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tenthuadat') is-invalid @enderror" id="tenthuadat" name="tenthuadat" value="{{old('tenthuadat',  $thuaDat->tenthuadat)}}" placeholder="Tên thửa đất" autofocus>
              @error('tenthuaDat')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="tobando">Tờ bản đồ </label>
              <input type="text" class="form-control @error('tobando') is-invalid @enderror" id="tobando" name="tobando" value="{{old('tobando',  $thuaDat->tobando)}}" placeholder="Tờ bản đồ" autofocus>
              @error('tobando')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			
			<div class="form-group">
              <label for="vitri">Vị trí </label>
              <textarea class="form-control @error('vitri') is-invalid @enderror" id="vitri" name="vitri"  placeholder="Vị trí" autofocus>{{old('vitri', $thuaDat->vitri)}}</textarea>
              @error('vitri')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			
			<div class="form-group">
              <label for="dientich">Diện tích </label>
              <input type="text" class="form-control @error('dientich') is-invalid @enderror" id="dientich" name="dientich" value="{{old('dientich',  $thuaDat->dientich)}}" placeholder="Diện tích" autofocus>
              @error('tobando')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			
			<div class="form-group">
              <label for="dacdiemthonhuong">Đặc điểm thổ nhưỡng </label>
              <textarea class="form-control @error('dacdiemthonhuong') is-invalid @enderror" id="dacdiemthonhuong" name="dacdiemthonhuong"  placeholder="Đặc điêm thổ nhưỡng" autofocus>{{old('dacdiemthonhuong', $thuaDat->dacdiemthonhuong)}}</textarea>
              @error('dacdiemthonhuong')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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