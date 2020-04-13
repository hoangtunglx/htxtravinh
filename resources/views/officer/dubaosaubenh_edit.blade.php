@extends('officer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('officer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('officer.dubaosaubenh.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Giống</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Giống <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('officer.dubaosaubenh.update') }} " method="post">
          @csrf()
          @method('PUT')
          <input type="hidden" name="dubaosaubenhid" value=" {{ $duBaoSauBenh->id }} ">

          <fieldset>
       
		
           <div class="form-group">
				<label for="vungnguyenlieu_id"> Vùng nguyên liệu <span class="text-danger font-weight-bold">*</span></label>	
				<select id="vungnguyenlieu_id" class="form-control custom-select @error('vungnguyenlieu_id') is-invalid @enderror" name="vungnguyenlieu_id" required autofocus>
				<option value="">-- Choose --</option>
					 @foreach($dsVungNguyenLieu as $vungNguyenLieu)
				<option value="{{ $vungNguyenLieu->id }}" {{ ($duBaoSauBenh->vungnguyenlieu_id == $vungNguyenLieu->id) ? 'selected' : '' }}>{{ $vungNguyenLieu->tenvungnguyenlieu}}</option>
						@endforeach
				</select>
				@error('vungnguyenlieu_id')
					<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
				@enderror
			</div>
     
       			<div class="form-group">
					<label for="saubenh_id">Sâu bệnh <span class="text-danger font-weight-bold">*</span></label>
					<select id="saubenh_id" class="form-control custom-select @error('saubenh_id') is-invalid @enderror" name="saubenh_id" required autofocus>
					<option value="">-- Choose --</option>
						 @foreach($dsSauBenh as $sauBenh)
					<option value="{{ $sauBenh->id }}" {{ ($duBaoSauBenh->saubenh_id == $sauBenh->id) ? 'selected' : '' }}>{{ $sauBenh->tensaubenh}}</option>
						@endforeach
					</select>
					@error('saubenh_id')
					<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
					@enderror
				</div>
				
				 <div class="form-group">
					<label for="muavu_id">Mùa vụ <span class="text-danger font-weight-bold">*</span></label>
					<select id="muavu_id" class="form-control custom-select @error('muavu_id') is-invalid @enderror" name="muavu_id" required autofocus>
					<option value="">-- Choose --</option>
						@foreach($dsMuaVu as $muaVu)
					<option value="{{ $muaVu->id }}" {{ ($duBaoSauBenh->muavu_id == $muaVu->id) ? 'selected' : '' }}>{{ $muaVu->tenmuavu}}</option>
						@endforeach
					</select>
					@error('muavu_id')
					<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
					@enderror
				</div>

           		<div class="form-group">
					<label for="muavu_id">Mùa vụ <span class="text-danger font-weight-bold">*</span></label>
					<select id="muavu_id" class="form-control custom-select @error('muavu_id') is-invalid @enderror" name="muavu_id" required autofocus>
					<option value="">-- Choose --</option>
					  @foreach($dsMuaVu as $muaVu)
					<option value="{{ $muaVu->id }}" {{ ($duBaoSauBenh->muavu_id == $muaVu->id) ? 'selected' : '' }}>{{ $muaVu->tenmuavu}}</option>
						@endforeach
					</select>
					@error('taxonomy_id')
					<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
					@enderror
				</div>
		
	            <div class="form-group">
	              <label for="thongtindubao">Thông tin dự báo </label>
	              <textarea class="form-control @error('mota') is-invalid @enderror" id="thongtindubao" name="thongtindubao" rows="3" placeholder="Thông tin dự báo" autofocus>{{old('thongtindubao', $duBaoSauBenh->thongtindubao)}}</textarea>
	              @error('thongtindubao')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
	            </div>
           
	            <div class="form-group">
	              <label for="ghichu">Ghi chú </label>
	              <textarea class="form-control @error('ghichu') is-invalid @enderror" id="ghichu" name="ghichu" rows="3" placeholder="Ghi chú" autofocus>{{old('ghichu', $duBaoSauBenh->ghichu)}}</textarea>
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