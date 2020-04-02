@extends('officer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('officer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('officer.goiyphanbonnuoctuoi.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Sâu bệnh</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Thông tin thời tiết <small> Tạo mới </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('officer.goiyphanbonnuoctuoi.store') }} " method="post">
          @csrf()
          <fieldset>

            <div class="form-group">
					<label for="vungnguyenlieu_id">Thông tin môi trường<span class="text-danger font-weight-bold">*</span></label>
					<select id="vungnguyenlieu_id" class="form-control custom-select @error('vungnguyenlieu_id') is-invalid @enderror" name="vungnguyenlieu_id" required autofocus>
						<option value="">-- Choose --</option>
						@foreach($dsVungNguyenLieu as $vungNguyenLieu)
							<option value="{{ $vungNguyenLieu->id }}">{{ $vungNguyenLieu->tenvungnguyenlieu }}</option>
						@endforeach
					</select>
					@error('vungnguyenlieu_id')
						<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
					@enderror
				</div>
			<div class="form-group">
					<label for="vungnguyenlieu_id">Thông tin thời tiết <span class="text-danger font-weight-bold">*</span></label>
					<select id="vungnguyenlieu_id" class="form-control custom-select @error('vungnguyenlieu_id') is-invalid @enderror" name="vungnguyenlieu_id" required autofocus>
						<option value="">-- Choose --</option>
						@foreach($dsVungNguyenLieu as $vungNguyenLieu)
							<option value="{{ $vungNguyenLieu->id }}">{{ $vungNguyenLieu->tenvungnguyenlieu }}</option>
						@endforeach
					</select>
					@error('vungnguyenlieu_id')
						<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
					@enderror
				</div>
	




			<div class="form-group">
              <label for="tieude">Tiêu đề<abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tieude') is-invalid @enderror" id="tieude" name="tieude" value="{{old('tieude')}}" placeholder="Tên sâu bệnh" autofocus>
              @error('tieude')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

			<div class="form-group">
              <label for="thongtingoiy">Thông tin gợi ý </label>
              <textarea class="form-control @error('dacdiem') is-invalid @enderror" id="thongtingoiy" name="thongtingoiy" rows="3" placeholder="Đặc điểm" autofocus>{{old('thongtingoiy')}}</textarea>
              @error('thongtingoiy')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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
