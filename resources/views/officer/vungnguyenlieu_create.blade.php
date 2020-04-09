@extends('officer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('officer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('officer.vungnguyenlieu.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Vùng nguyên liệu</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Vùng nguyên liệu <small> Tạo mới </small> </h1>
    </div>
  </header>
  
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('officer.vungnguyenlieu.store') }} " method="post">
          @csrf()
          <fieldset>
            <div class="form-group">
              <label for="nongsan_id">Nông sản  <abbr title="Required">*</abbr></label>
              <select class="form-control" id="nongsan_id" name="nongsan_id">
                <option value="0" disable="true" selected="true">Chọn nông sản</option>
                @foreach($dsNongSan as $key => $vungNguyenLieu)
                  <option value="{{ $vungNguyenLieu->id }}">{{ $vungNguyenLieu->tennongsan }}</option>
                @endforeach
              </select>
            </div>
			<div class="form-group">
              <label for="hoptacxa_id">Hợp tác xã  <abbr title="Required">*</abbr></label>
              <select class="form-control" id="hoptacxa_id" name="hoptacxa_id">
                <option value="0" disable="true" selected="true">Chọn hợp tác xã</option>
                @foreach($dsHopTacXa as $key => $vungNguyenLieu)
                  <option value="{{ $vungNguyenLieu->id }}">{{ $vungNguyenLieu->tenhtx }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="tenvungnguyenlieu">Tên vung nguyên liệu <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tenvungnguyenlieu') is-invalid @enderror" id="tenvungnguyenlieu" name="tenvungnguyenlieu" value="{{old('tenvungnguyenlieu')}}" placeholder="Tên vùng nguyên liệu " autofocus>
              @error('tenvungnguyenlieu')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="tongdientich">Tổng điện tích </label>
              <textarea class="form-control @error('tongdientich') is-invalid @enderror" id="tongdientich" name="tongdientich" rows="3" placeholder="Tổng điện tích" autofocus>{{old('tongdientich')}}</textarea>
              @error('tongdientich')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			<div class="form-group">
              <label for="tongsothua">Tổng số thửa </label>
              <textarea class="form-control @error('tongsothua') is-invalid @enderror" id="tongsothua" name="tongsothua" rows="3" placeholder="Tổng số thửa" autofocus>{{old('tongsothua')}}</textarea>
              @error('tongsothua')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
			<div class="form-group">
              <label for="tongsothanhvien">Tổng số thành viên </label>
              <textarea class="form-control @error('tongsothua') is-invalid @enderror" id="tongsothua" name="tongsothua" rows="3" placeholder="Tổng số thành viên" autofocus>{{old('tongsothua')}}</textarea>
              @error('tongsothua')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            <div class="form-group">
              <label for="vitri">Vị trí </label>
              <textarea class="form-control @error('vitri') is-invalid @enderror" id="vitri" name="vitri" rows="3" placeholder="Vị trí" autofocus>{{old('vitri')}}</textarea>
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