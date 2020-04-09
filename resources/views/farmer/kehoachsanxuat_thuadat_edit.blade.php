@extends('farmer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('farmer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('farmer.kehoachsanxuat_thuadat.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Kế hoạch sản xuất thửa đất</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Kế hoạch sản xuất thửa đất <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('farmer.kehoachsanxuat_thuadat.update') }} " method="post">
          @csrf()
          @method('PUT')
          <input type="hidden" name="kehoachsanxuat_thuadatid" value=" {{ $keHoachSanXuat_ThuaDat->id }} ">

          <fieldset>
			<div class="form-group">
                <label for="kehoachsanxuat_id">Kế hoạch sản xuất <abbr title="Required">*</abbr></label>
                <select class="form-control" id="kehoachsanxuat_id" name="kehoachsanxuat_id">
					<option value="">Kế hoạch sản xuất</option>
					@foreach($keHoachSanXuat as $value)
					  <option value="{{ $value->id }}" {{ ($keHoachSanXuat_ThuaDat->kehoachsanxuat_id == $value->id) ? 'selected' : '' }}>{{ $value->tenkehoachsanxuatmuavu }}</option>
					@endforeach
				</select>
            </div>
			<div class="form-group">
                <label for="thuadat_id">Thửa đất <abbr title="Required">*</abbr></label>
                <select class="form-control" id="thuadat_id" name="thuadat_id">
					<option value="">Thửa đất</option>
					@foreach($thuaDat as $value)
					  <option value="{{ $value->id }}" {{ ($keHoachSanXuat_ThuaDat->thuadat_id == $value->id) ? 'selected' : '' }}>{{ $value->tenthuadat }}</option>
					@endforeach
				</select>
            </div>
            <div class="form-group">
              <label for="tenkehoachsanxuat_thuadat">Tên kế hoạch sản xuất <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tenkehoachsanxuat_thuadat') is-invalid @enderror" id="tenkehoachsanxuat_thuadat" name="tenkehoachsanxuat_thuadat" value="{{old('tenkehoachsanxuat_thuadat',  $keHoachSanXuat_ThuaDat->tenkehoachsanxuat_thuadat)}}" placeholder="Tên kế hoạch sản xuất" autofocus>
              @error('tenkeHoachSanXuat_ThuaDat')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="dientich">Diện tích </label>
              <input type="text" class="form-control @error('dientich') is-invalid @enderror" id="dientich" name="dientich" value="{{old('dientich',  $keHoachSanXuat_ThuaDat->dientich)}}" placeholder="Diện tích" autofocus>
              @error('dientich')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			<!--<div class="form-check mb-3">
				<input class="form-check-input" type="checkbox" id="duyet" name="duyet" {{ ($keHoachSanXuat_ThuaDat->duyet) ? 'checked' : '' }} />
				<label class="form-check-label" for="duyet">Duyệt</label>
			</div>-->
			
			<div class="form-check mb-3">
				<input class="form-check-input" type="checkbox" id="trangthaithamgia" name="trangthaithamgia" {{ ($keHoachSanXuat_ThuaDat->trangthaithamgia) ? 'checked' : '' }} />
				<label class="form-check-label" for="trangthaithamgia">Trạng thái tham gia</label>
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