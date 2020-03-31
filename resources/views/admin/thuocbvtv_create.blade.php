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
      <h1 class="page-title mr-sm-auto"> Thuốc Bvtv <small> Tạo mới </small> </h1>
    </div>
  </header>
  
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('farmer.thuocbvtv.store') }} " method="post">
          @csrf()
          <fieldset>
            <div class="form-group">
              <label for="loaithuocbvtv_id">Loại thuốc bảo vệ thực vật id <abbr title="Required">*</abbr></label>
              <select class="form-control" id="loaithuocbvtv_id" name="loaithuocbvtv_id">
                <option value="0" disable="true" selected="true">== Chọn ID ==</option>
                @foreach($dsLoaiThuocBVTV as $key => $loaiThuocBVTV)
                  <option value="{{ $loaiThuocBVTV->id }}">{{ $loaiThuocBVTV->tenloaithuocbvtv }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="tenthuocbvtv">Tên thuốc BVTV <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tenthuocbvtv') is-invalid @enderror" id="tenthuocbvtv" name="tenthuocbvtv" value="{{old('tenthuocbvtv')}}" placeholder="Tên thuốc BVTV " autofocus>
              @error('tenthuocbvtv')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="mucdich">Múc đích <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('mucdich') is-invalid @enderror" id="mucdich" name="mucdich" value="{{old('mucdich')}}" placeholder="Mục đích" autofocus>
                @error('mucdich')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="nguongoc">Nguồn gốc <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('nguongoc') is-invalid @enderror" id="nguongoc" name="nguongoc" value="{{old('nguongoc')}}" placeholder="Nguồn gốc" autofocus>
                @error('nguongoc')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
                <label for="thanhphanhamluong">Thành phần hàm lượng <abbr title="Required">*</abbr></label>
                <textarea class="form-control @error('thanhphanhamluong') is-invalid @enderror" id="thanhphanhamluong" name="thanhphanhamluong" rows="5" placeholder="Thành phần hàm lượng" autofocus>{{old('thanhphanhamluong')}}</textarea>
                @error('thanhphanhamluong')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror</textarea>
            </div>
            <div class="form-group">
                <label for="nhacungcap">Nhà cung cấp <abbr title="Required">*</abbr></label>
                <input type="text" class="form-control @error('nhacungcap') is-invalid @enderror" id="nhacungcap" name="nhacungcap" value="{{old('nhacungcap')}}" placeholder="Nhà cung cấp" autofocus>
                @error('nhacungcap')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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