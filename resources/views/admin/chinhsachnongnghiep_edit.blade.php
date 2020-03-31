@extends('admin.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('admin.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('admin.chinhsachnongnghiep.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Thông tin thị trường</a>
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

        <form action=" {{ route('admin.chinhsachnongnghiep.update') }} " method="post">
          @csrf()
          @method('PUT')
          <input type="hidden" name="chinhsachnongnghiepid" value=" {{ $chinhSachNongNghiep->id }} ">

          <fieldset>

            <div class="form-group">
              <label for="hoptacxa_id">Chọn hợp tác xã <abbr title="Required">*</abbr></label>
              <select id="hoptacxa_id" class="form-control custom-select @error('hoptacxa_id') is-invalid @enderror" name="hoptacxa_id"   autofocus >
                  <option value="">-- Choose --</option>
                      @foreach($dsHopTacXa as $value)
                          <option value="{{ $value->id }}" {{ ($chinhSachNongNghiep->hoptacxa_id == $value->id) ? 'selected' : '' }}>{{$value->tenhtx}}</option>
                      @endforeach
              </select>
              @error('hoptacxa_id')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="tenchinhsach">Tên chính sách<span class="text-danger font-weight-bold">*</span></label>
              <input type="text" class="form-control @error('tenchinhsach') is-invalid @enderror" id="tenchinhsach" name="tenchinhsach" value="{{old('tenchinhsach',$chinhSachNongNghiep->tenchinhsach) }}" placeholder="Tên chính sách" >
              @error('tenchinhsach')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
             
            <div class="form-group">
              <label for="sovanban">Số văn bản</label>
              <input type="text" class="form-control @error('sovanban') is-invalid @enderror" id="sovanban" name="sovanban" value="{{old('sovanban',  $chinhSachNongNghiep->sovanban)}}" placeholder="Số văn bản" >
              @error('sovanban')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="tomtatvanban">Tóm tắt văn bản  </label>
              <textarea class="form-control ckeditor @error('tomtatvanban') is-invalid @enderror" id="tomtatvanban" name="tomtatvanban" >{{old('tomtatvanban',  $chinhSachNongNghiep->tomtatvanban)}}</textarea>
              @error('tomtatvanban')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="mota">Mô tả </label>
              <textarea class="form-control @error('mota') is-invalid @enderror" id="mota" name="mota" rows="3" placeholder="Mô tả" >{{old('mota',  $chinhSachNongNghiep->mota)}}</textarea>
              @error('mota')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="nguoidung_id">Chọn người dùng </label>
              <select id="nguoidung_id" class="form-control custom-select @error('nguoidung_id') is-invalid @enderror" name="nguoidung_id"  placeholder="Chọn hợp tác xã"  >
                  <option value="">-- Choose --</option>
                      @foreach($dsNguoiDung as $value)
                          <option value="{{ $value->id }}">{{ $value->id == old('nguoidung_id') ? 'selected' : ''}} {{ $value->hoten }}</option>
                      @endforeach
              </select>
              @error('nguoidung_id')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="taptin">Chọn tập tin </label><br>
              <input type="file" class=" @error('taptin') is-invalid @enderror" id="taptin" name="taptin" value="{{old('taptin')}}">
              @error('taptin')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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
@section('javascript')
  <script src="{{ asset('public/admin/javascript/ckeditor/ckeditor.js') }}"></script>
@endsection