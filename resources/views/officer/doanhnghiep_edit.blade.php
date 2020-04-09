@extends('officer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('officer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('officer.doanhnghiep.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Loại giống</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Doanh nghiệp <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('officer.doanhnghiep.update') }} " method="post">
          @csrf()
          @method('PUT')
          <input type="hidden" name="doanhnghiepid" value=" {{ $doanhNghiep->id }} ">

          <fieldset>
            <div class="form-group">
              <label for="tendoanhnghiep">Tên doanh nghiệp <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tendoanhnghiep') is-invalid @enderror" id="tendoanhnghiep" name="tendoanhnghiep" value="{{old('tendoanhnghiep',  $doanhNghiep->tendoanhnghiep)}}" placeholder="Tên doanh nghiệp" autofocus>
              @error('tendoanhnghiep')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="nguoidaidien">Người đại diện <abbr title="Required">*</abbr></label>
              <textarea class="form-control @error('nguoidaidien') is-invalid @enderror" id="nguoidaidien" name="nguoidaidien" rows="3" placeholder="Người đại diện" autofocus>{{old('nguoidaidien', $doanhNghiep->nguoidaidien)}}</textarea>
              @error('nguoidaidien')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			
			<div class="form-group">
              <label for="diachi">Địa chỉ <abbr title="Required">*</abbr></label>
              <textarea class="form-control @error('diachi') is-invalid @enderror" id="diachi" name="diachi" rows="3" placeholder="Địa chỉ" autofocus>{{old('diachi', $doanhNghiep->diachi)}}</textarea>
              @error('diachi')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			
			<div class="form-group">
              <label for="sodienthoai">Số điện thoại <abbr title="Required">*</abbr></label>
              <textarea class="form-control @error('sodienthoai') is-invalid @enderror" id="sodienthoai" name="sodienthoai" rows="3" placeholder="Số điện thoại" autofocus>{{old('sodienthoai', $doanhNghiep->sodienthoai)}}</textarea>
              @error('sodienthoai')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			
			<div class="form-group">
              <label for="vitri">Vị trí </label>
              <textarea class="form-control @error('vitri') is-invalid @enderror" id="vitri" name="vitri" rows="3" placeholder="Vị trí" autofocus>{{old('vitri', $doanhNghiep->vitri)}}</textarea>
              @error('vitri')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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