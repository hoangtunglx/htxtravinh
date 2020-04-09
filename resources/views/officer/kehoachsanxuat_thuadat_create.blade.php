@extends('officer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('officer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('officer.kehoachsanxuat_thuadat.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Kế hoạch sản xuất thửa đất</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Kế hoạch sản xuất thửa đất <small> Tạo mới </small> </h1>
    </div>
  </header>
  
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('officer.kehoachsanxuat_thuadat.store') }} " method="post">
          @csrf()
          <fieldset>
            <div class="form-group">
              <label for="kehoachsanxuat_id">Kế hoạch sản xuất  <abbr title="Required">*</abbr></label>
              <select class="form-control" id="kehoachsanxuat_id" name="kehoachsanxuat_id">
                <option value="0" disable="true" selected="true">Chọn kế hoạch sản xuất</option>
                @foreach($dsKeHoachSanXuat as $key => $keHoachSanXuat_ThuaDat)
                  <option value="{{ $keHoachSanXuat_ThuaDat->id }}">{{ $keHoachSanXuat_ThuaDat->tenkehoachsanxuatmuavu }}</option>
                @endforeach
              </select>
            </div>
			<div class="form-group">
              <label for="thuadat_id">Thửa đất  <abbr title="Required">*</abbr></label>
              <select class="form-control" id="thuadat_id" name="thuadat_id">
                <option value="0" disable="true" selected="true">Chọn thửa đất</option>
                @foreach($dsThuaDat as $key => $keHoachSanXuat_ThuaDat)
                  <option value="{{ $keHoachSanXuat_ThuaDat->id }}">{{ $keHoachSanXuat_ThuaDat->tenthuadat }}</option>
                @endforeach
              </select>
            </div>			
            <div class="form-group">
              <label for="tenkehoachsanxuat_thuadat">Tên kế hoạch sản xuất thửa đất <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tenkehoachsanxuat_thuadat') is-invalid @enderror" id="tenkehoachsanxuat_thuadat" name="tenkehoachsanxuat_thuadat" value="{{old('tenkehoachsanxuat_thuadat')}}" placeholder="Tên kế hoạch sản xuất thửa đất " autofocus>
              @error('tenkehoachsanxuat_thuadat')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="dientich">Diện tích </label>
              <textarea class="form-control @error('dientich') is-invalid @enderror" id="dientich" name="dientich" rows="3" placeholder="Diện tích" autofocus>{{old('dientich')}}</textarea>
              @error('dientich')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			<div class="form-group">
              <label for="tongsothua">Tổng số thửa </label>
              <textarea class="form-control @error('tongsothua') is-invalid @enderror" id="tongsothua" name="tongsothua" rows="3" placeholder="Tổng số thửa" autofocus>{{old('tongsothua')}}</textarea>
              @error('tongsothua')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			<div class="form-check mb-3">
				<input class="form-check-input" type="checkbox" id="duyet" name="duyet" {{ old('duyet') ? 'checked' : '' }} />
				<label class="form-check-label" for="duyet">Duyệt</label>
			</div>
			<div class="form-check mb-3">
				<input class="form-check-input" type="checkbox" id="trangthaithamgia" name="trangthaithamgia" {{ old('trangthaithamgia') ? 'checked' : '' }} />
				<label class="form-check-label" for="trangthaithamgia">Trạnh th</label>
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