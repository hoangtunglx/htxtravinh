@extends('admin.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('admin.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('admin.vungnguyenlieu.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Vùng nguyên liệu</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Vùng nguyên liệu <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('admin.vungnguyenlieu.update') }} " method="post">
          @csrf()
          @method('PUT')
          <input type="hidden" name="vungnguyenlieuid" value=" {{ $vungNguyenLieu->id }} ">

          <fieldset>
			<div class="form-group">
                <label for="nongsan_id">Nông sản <abbr title="Required">*</abbr></label>
                <select class="form-control" id="nongsan_id" name="nongsan_id">
					<option value="">Chọn nông sản</option>
					@foreach($nongSan as $value)
					  <option value="{{ $value->id }}" {{ ($vungNguyenLieu->nongsan_id == $value->id) ? 'selected' : '' }}>{{ $value->tennongsan }}</option>
					@endforeach
				</select>
            </div>
			<div class="form-group">
                <label for="hoptacxa_id">Hợp tác xã <abbr title="Required">*</abbr></label>
                <select class="form-control" id="hoptacxa_id" name="hoptacxa_id">
					<option value="">Chọn hợp tác xã</option>
					@foreach($hopTacXa as $value)
					  <option value="{{ $value->id }}" {{ ($vungNguyenLieu->hoptacxa_id == $value->id) ? 'selected' : '' }}>{{ $value->tenhtx }}</option>
					@endforeach
				</select>
            </div>
            <div class="form-group">
              <label for="tenvungnguyenlieu">Tên vùng nguyên liệu <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tenvungnguyenlieu') is-invalid @enderror" id="tenvungnguyenlieu" name="tenvungnguyenlieu" value="{{old('tenvungnguyenlieu',  $vungNguyenLieu->tenvungnguyenlieu)}}" placeholder="Tên vùng nguyên liệu" autofocus>
              @error('tenvungNguyenLieu')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="tongdientich">Tổng diện tích </label>
              <input type="text" class="form-control @error('tongdientich') is-invalid @enderror" id="tongdientich" name="tongdientich" value="{{old('tongdientich',  $vungNguyenLieu->tongdientich)}}" placeholder="Tổng diện tích" autofocus>
              @error('tongdientich')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			
			<div class="form-group">
              <label for="tongsothua">Tổng số thửa</label>
              <input type="text" class="form-control @error('tongsothua') is-invalid @enderror" id="tongsothua" name="tongsothua" value="{{old('tongsothua',  $vungNguyenLieu->tongsothua)}}" placeholder="Tổng số thửa" autofocus>
              @error('tongsothua')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			
			<div class="form-group">
              <label for="tongsothanhvien">Tổng số thành viên </label>
              <input type="text" class="form-control @error('tongsothanhvien') is-invalid @enderror" id="tongsothanhvien" name="tongsothanhvien" value="{{old('tongsothanhvien',  $vungNguyenLieu->tongsothanhvien)}}" placeholder="Tổng số thành viên" autofocus>
              @error('tongsothanhvien')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			
			<div class="form-group">
              <label for="vitri">Vị trí </label>
              <textarea class="form-control @error('vitri') is-invalid @enderror" id="vitri" name="vitri"  placeholder="Đặc điêm thổ nhưỡng" autofocus>{{old('vitri', $vungNguyenLieu->vitri)}}</textarea>
              @error('vitri')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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