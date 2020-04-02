@extends('officer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('officer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('officer.goiyphanbonuoctuoi.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Tiêu chuẩn sản xuất</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Gợi ý phân bón nước tưới <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('officer.saubenh.update') }} " method="post" >
          @csrf()
          @method('PUT')
          <input type="hidden" name="goiyphanbonnuoctuoiid" value=" {{ $sauBenh->id }} ">
          <fieldset>

	
            
			<div class="form-group">
              <label for="tieude">lượng mưa<abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tieude') is-invalid @enderror" id="tieude" name="tieude" value="{{old('tieude')}}" placeholder="Lượng mưa" autofocus>
              @error('tieude')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

              <div class="form-group">
              <label for="dacdiem"> Thông tin gợi ý </label>
              <textarea class="form-control @error('dacdiem') is-invalid @enderror" id="dacdiem" name="dacdiem" rows="3" placeholder="Đặc điểm" autofocus>{{old('tensaubenh', $sauBenh->dacdiem)}}</textarea>
              @error('dacdiem')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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
