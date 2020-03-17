@extends('admin.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('farmer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('farmer.thuocbvtv.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Thuốc Bvtv</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Thuốc Bvtv <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('farmer.thuocbvtv.update') }} " method="post">
          @csrf()
          @method('PUT')
          <input type="hidden" name="thuocbvtvid" value=" {{ $thuocBvtv->id }} ">

          <fieldset>
            <div class="form-group">
                <label for="loaithuocbvtv_id">Loại thuốc BVTV id <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('loaithuocbvtv_id') is-invalid @enderror" id="loaithuocbvtv_id" name="loaithuocbvtv_id" value="{{old('loaithuocbvtv_id',  $thuocBvtv->loaithuocbvtv_id)}}" placeholder="Loại thuốc BVTV id" autofocus>
                @error('loaithuocbvtv_id')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="tenthuocbvtv">Tên thuốc Bvtv <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tenthuocbvtv') is-invalid @enderror" id="tenthuocbvtv" name="tenthuocbvtv" value="{{old('tenthuocbvtv',  $thuocBvtv->tenthuocbvtv)}}" placeholder="Tên thuốc bvtv" autofocus>
              @error('tenthuocbvtv')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="mucdich">Mục đích <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('mucdich') is-invalid @enderror" id="mucdich" name="mucdich" value="{{old('mucdich',  $thuocBvtv->mucdich)}}" placeholder="Mục đích" autofocus>
                @error('mucdich')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="nguongoc">Nguồn gốc <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('nguongoc') is-invalid @enderror" id="nguongoc" name="nguongoc" value="{{old('nguongoc',  $thuocBvtv->nguongoc)}}" placeholder="Nguồn gốc" autofocus>
                @error('nguongoc')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="thanhphanhamluong">Thành phần hàm lượng <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('thanhphanhamluong') is-invalid @enderror" id="thanhphanhamluong" name="thanhphanhamluong" value="{{old('thanhphanhamluong',  $thuocBvtv->thanhphanhamluong)}}" placeholder="Thành phần hàm lượng" autofocus>
                @error('thanhphanhamluong')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="nhacungcap">Nhà cung cấp <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('nhacungcap') is-invalid @enderror" id="nhacungcap" name="nhacungcap" value="{{old('nhacungcap',  $thuocBvtv->nhacungcap)}}" placeholder="Nhà cung cấp" autofocus>
                @error('nhacungcap')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="mota">Mô tả </label>
              <textarea class="form-control @error('mota') is-invalid @enderror" id="mota" name="mota" rows="3" placeholder="Mô tả" autofocus>{{old('mota', $thuocBvtv->mota)}}</textarea>
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