@extends('admin.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('admin.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('admin.thongtinthitruong.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Thông tin thị trường</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Thông tin thị trường <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('admin.thongtinthitruong.update') }} " method="post">
          @csrf()
          @method('PUT')
          <input type="hidden" name="thongtinthitruongid" value=" {{ $thongTinThiTruong->id }} ">

          <fieldset>

            <div class="form-group">
              <label for="nongsan_id">Chọn nông sản<abbr title="Required">*</abbr></label>
              <select id="nongsan_id" class="form-control custom-select @error('nongsan_id') is-invalid @enderror" name="nongsan_id"  placeholder="Chọn nông sản" autofocus>
                  <option value="">-- Choose --</option>
                      @foreach($dsNongSan as $value)
                           <option value="{{ $value->id }}" {{ ($thongTinThiTruong->nongsan_id == $value->id) ? 'selected' : '' }}>{{ $value->tennongsan }}</option>
                      @endforeach
              </select>
              @error('nongsan_id')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

            <div class="form-group">
              <label for="ngaycapnhat">Ngày cập nhật<span class="text-danger font-weight-bold">*</span> </label>
              <input type="date" class="form-control @error('ngaycapnhat') is-invalid @enderror" id="ngaycapnhat" name="ngaycapnhat" value="{{ old('ngaycapnhat', date('Y-m-d'))  }}" >
              @error('ngaycapnhat')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="dongia">Đơn giá<span class="text-danger font-weight-bold">*</span></label>
              <input type="number" min="0" step="0.01"  class="form-control @error('dongia') is-invalid @enderror" id="dongia" name="dongia" value="{{old('dongia',  $thongTinThiTruong->dongia)}}" placeholder="0.00"  >
              @error('dongia')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

            <div class="form-group">
              <label for="chinhsachkhuyenmai">Chính sách khuyến mãi</label>
              <textarea class="form-control @error('chinhsachkhuyenmai') is-invalid @enderror" id="chinhsachkhuyenmai" name="chinhsachkhuyenmai" rows="3" placeholder="Chính sách khuyến mãi" >{{old('chinhsachkhuyenmai', $thongTinThiTruong->chinhsachkhuyenmai)}}</textarea>
              @error('chinhsachkhuyenmai')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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