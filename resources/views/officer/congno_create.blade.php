@extends('officer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('officer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('officer.congno.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Công nợ</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Công nợ <small> Tạo mới </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('officer.congno.store') }} " method="post">
          @csrf()
          <fieldset>
            
             <div class="form-group">
              <label for="nguoidung_id">Chọn người dùng <span class="text-danger font-weight-bold">*</span></label>
              <select id="nguoidung_id" class="form-control custom-select @error('nguoidung_id') is-invalid @enderror" name="nguoidung_id"  placeholder="Chọn người dùng" >
                  <option value="">-- Choose --</option>
                      @foreach($dsNguoiDung as $value)
                         <option value= "{{ $value->id }}" {{$value->id == old('nguoidung_id') ? ' selected' : ''}}> {{$value->hoten}} </option>
                      @endforeach
              </select>
              @error('nguoidung_id')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

             <div class="form-group">
              <label for="donhang_id">Chọn đơn hàng <span class="text-danger font-weight-bold"></span></label>
              <select id="donhang_id" class="form-control custom-select @error('donhang_id') is-invalid @enderror" name="donhang_id"  placeholder="Chọn đơn hàng" >
                  <option value="">-- Choose --</option>
                      @foreach($dsDonHang as $value)
                        <option value= "{{ $value->id }}" {{$value->id == old('donhang_id') ? ' selected' : ''}}> {{$value->id}} </option>
                      @endforeach
              </select>
              @error('donhang_id')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

            <div class="form-group">
              <label for="donthue_id">Chọn đơn thuê <span class="text-danger font-weight-bold"></span></label>
              <select id="donthue_id" class="form-control custom-select @error('donthue_id') is-invalid @enderror" name="donthue_id"  placeholder="Chọn đơn thuês" >
                  <option value="">-- Choose --</option>
                      @foreach($dsDonThue as $value)
                        <option value= "{{ $value->id }}" {{$value->id == old('donthue_id') ? ' selected' : ''}}> {{$value->id}} </option>
                      @endforeach
              </select>
              @error('donthue_id')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

            <div class="form-group">
              <label for="muavu_id">Chọn mùa vụ <span class="text-danger font-weight-bold"></span></label>
              <select id="muavu_id" class="form-control custom-select @error('muavu_id') is-invalid @enderror" name="muavu_id"  placeholder="Chọn mùa vụ" >
                  <option value="">-- Choose --</option>
                      @foreach($dsMuaVu as $value)
                        <option value= "{{ $value->id }}" {{$value->id == old('muavu_id') ? ' selected' : ''}}> {{$value->tenmuavu}} </option>
                      @endforeach
              </select>
              @error('muavu_id')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

            <div class="form-group">
              <label for="sotienconno">Số tiền còn nợ <span class="text-danger font-weight-bold">*</span></label>
              <input type="number" min="0" step="0.01"  class="form-control @error('sotienconno') is-invalid @enderror" id="sotienconno" name="sotienconno" value="{{old('sotienconno')}}" placeholder="0.00"  >
              @error('sotienconno')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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