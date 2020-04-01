@extends('officer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('officer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('officer.saubenh.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Sâu bệnh</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Sâu bệnh <small> Tạo mới </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('officer.saubenh.store') }} " method="post">
          @csrf()
          <fieldset>

			<div class="form-group">
              <label for="tensaubenh">Tên sâu bệnh <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tensaubenh') is-invalid @enderror" id="tensaubenh" name="tensaubenh" value="{{old('tensaubenh')}}" placeholder="Tên sâu bệnh" autofocus>
              @error('tensaubenh')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="dacdiem">Đặc điểm </label>
              <textarea class="form-control @error('dacdiem') is-invalid @enderror" id="dacdiem" name="dacdiem" rows="3" placeholder="Đặc điểm" autofocus>{{old('dacdiem')}}</textarea>
              @error('dacdiem')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="caytrongtancong">Cây trồng tấn công </label>
              <textarea class="form-control @error('caytrongtancong') is-invalid @enderror" id="dacdiem" name="caytrongtancong" rows="3" placeholder="Cây trồng tấn công" autofocus>{{old('caytrongtancong')}}</textarea>
              @error('caytrongtancong')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="dauhieu">Dấu hiệu </label>
              <textarea class="form-control @error('dauhieu') is-invalid @enderror" id="dauhieu" name="dauhieu" rows="3" placeholder="Dấu hiệu" autofocus>{{old('dauhieu')}}</textarea>
              @error('dauhieu')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="bienphapphongtranh"> Biện pháp phòng tránh </label>
              <textarea class="form-control @error('dauhieu') is-invalid @enderror" id="bienphapphongtranh" name="bienphapphongtranh" rows="3" placeholder="Biện pháp phòng tránh" autofocus>{{old('bienphapphongtranh')}}</textarea>
              @error('bienphapphongtranh')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

            <div class="form-group">
              <label for="ghichu"> Ghi chú </label>
              <textarea class="form-control @error('ghichu') is-invalid @enderror" id="bienphapphongtranh" name="ghichu" rows="3" placeholder="Ghi chú" autofocus>{{old('ghichu')}}</textarea>
              @error('ghichu')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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
