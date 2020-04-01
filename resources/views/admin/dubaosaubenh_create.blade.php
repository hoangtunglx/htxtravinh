@extends('admin.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('admin.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>

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

        <form action=" {{ route('admin.dubaosaubenh.store') }} " method="post">
          @csrf()
          <fieldset>



		<div class="form-group">
              <label for="vungnguyenlieu_id">Vùng nguyên liệu<abbr title="Required">*</abbr></label>
              <select class="form-control" id="vungnguyenlieu_id" name="vungnguyenlieu_id">
                <option value="0" disable="true" selected="true">== Chọn Vùng ==</option>
                @foreach($dsVungNguyenLieu as $vungNguyenLieu)
                  <option value="{{ $vungNguyenLieu->id }}">{{ $vungNguyenLieu->tenvungnguyenlieu }}</option>
                @endforeach
              </select>
        </div>
		
		<div class="form-group">
              <label for="saubenh_id">Tên sâu bệnh<abbr title="Required">*</abbr></label>
              <select class="form-control" id="saubenh_id" name="saubenh_id">
                <option value="0" disable="true" selected="true">== Chọn sâu bệnh ==</option>
                @foreach($dsSauBenh as $sauBenh)
                  <option value="{{ $sauBenh->id }}">{{ $sauBenh->tensaubenh }}</option>
                @endforeach
              </select>
        </div>

		<div class="form-group">
              <label for="muavu_id">Mùa vụ<abbr title="Required">*</abbr></label>
              <select class="form-control" id="muavu_id" name="muavu_id">
                <option value="0" disable="true" selected="true">== Chọn mùa vụ ==</option>
                @foreach($dsMuaVu as $muaVu)
                  <option value="{{ $muaVu->id }}">{{ $muaVu->tenmuavu }}</option>
                @endforeach
              </select>
        </div>
      
		<div class="form-group">
              <label for="ghichu">Thông tin dư báo </label>
              <textarea class="form-control @error('ghichu') is-invalid @enderror" id="thongtindubao" name="thongtindubao" rows="3" placeholder="Thông tin dự báo " autofocus>{{old('thongtindubao')}}</textarea>
              @error('thongtindubao')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
          </div>
			
		<div class="form-group">
              <label for="ghichu">Ghi chú </label>
              <textarea class="form-control @error('ghichu') is-invalid @enderror" id="ghichu" name="ghichu" rows="3" placeholder="Ghi chú" autofocus>{{old('ghichu')}}</textarea>
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
