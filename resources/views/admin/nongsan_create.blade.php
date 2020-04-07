@extends('admin.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('admin.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('admin.nongsan.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Nông sản</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Nông sản <small> Tạo mới </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('admin.nongsan.store') }} " method="post">
          @csrf()
          <fieldset>
            <div class="form-group">
              <label for="tennongsan">Tên nông sản <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tennongsan') is-invalid @enderror" id="tennongsan" name="tennongsan" value="{{old('tennongsan')}}" placeholder="Tên nông sản" autofocus>
              @error('tennongsan')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="loainongsan_id">Chọn loại nông sản <span class="text-danger font-weight-bold">*</span></label>
              <select id="loainongsan_id" class="form-control custom-select @error('loainongsan_id') is-invalid @enderror" name="loainongsan_id"  placeholder="Chọn loại nông sản" >
                  <option value="">-- Choose --</option>
                      @foreach($dsLoaiNongSan as $value)
                           <option value= "{{ $value->id }}" {{$value->id == old('loainongsan_id') ? ' selected' : ''}}> {{$value->tenloainongsan}} </option>
                      @endforeach
              </select>
              @error('loainongsan_id')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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