@extends('admin.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('farmer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('farmer.loaitieuchuansx.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Loại tiêu chuẩn sản xuất</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Loại tiêu chuẩn sản xuất <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('farmer.loaitieuchuansx.update') }} " method="post">
          @csrf()
          @method('PUT')
          <input type="hidden" name="loaitieuchuansxid" value=" {{ $loaiTieuChuanSX->id }} ">

          <fieldset>
            <div class="form-group">
              <label for="tenloaitieuchuansx">Tên loại tiêu chuẩn sản xuất <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tenloaitieuchuansx') is-invalid @enderror" id="tenloaitieuchuansx" name="tenloaitieuchuansx" value="{{old('tenloaitieuchuansx',  $loaiTieuChuanSX->tenloaitieuchuansx)}}" placeholder="Tên loại tiêu chuẩn sản xuất" autofocus>
              @error('tenloaitieuchuansx')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="mota">Mô tả </label>
              <textarea class="form-control @error('mota') is-invalid @enderror" id="mota" name="mota" rows="3" placeholder="Mô tả" autofocus>{{old('mota', $loaiTieuChuanSX->mota)}}</textarea>
              @error('mota')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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