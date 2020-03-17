@extends('admin.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('admin.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('admin.loaigiong.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Loại giống</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Loại giống <small> Tạo mới </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('admin.loaigiong.store') }} " method="post">
          @csrf()
          <fieldset>
            <div class="form-group">
              <label for="tenloaigiong">Tên loại giống <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tenloaigiong') is-invalid @enderror" id="tenloaigiong" name="tenloaigiong" value="{{old('tenloaigiong')}}" placeholder="Tên loại giống" autofocus>
              @error('tenloaigiong')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="mota">Mô tả </label>
              <textarea class="form-control @error('mota') is-invalid @enderror" id="mota" name="mota" rows="3" placeholder="Mô tả" autofocus>{{old('mota')}}</textarea>
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