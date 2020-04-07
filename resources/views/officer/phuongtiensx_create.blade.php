@extends('officer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('officer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" {{ route('officer.phuongtiensx.index') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Phương tiện sản xuất</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Phương tiện sản xuất <small> Tạo mới </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('officer.phuongtiensx.store') }} " method="post">
          @csrf()
          <fieldset>

            <div class="form-group">
              <label for="masophuongtien">Mã số <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('masophuongtien') is-invalid @enderror" id="masophuongtien" name="masophuongtien" value="{{old('masophuongtien')}}" placeholder="Mã số phương tiện" autofocus>
              @error('masophuongtien')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

            <div class="form-group">
              <label for="hoptacxa_id">Chọn hợp tác xã <span class="text-danger font-weight-bold">*</span></label>
              <select id="hoptacxa_id" class="form-control custom-select @error('hoptacxa_id') is-invalid @enderror" name="hoptacxa_id"  placeholder="Chọn hợp tác xã" >
                  <option value="">-- Choose --</option>
                      @foreach($dsHopTacXa as $value)
                        <option value= "{{ $value->id }}" {{$value->id == old('hoptacxa_id') ? ' selected' : ''}}> {{$value->tenhtx}} </option>
                      @endforeach
              </select>
              @error('hoptacxa_id')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

            <div class="form-group">
              <label for="loaiphuongtien_id">Chọn loại phương tiện <span class="text-danger font-weight-bold">*</span></label>
              <select id="loaiphuongtien_id" class="form-control custom-select @error('loaiphuongtien_id') is-invalid @enderror" name="loaiphuongtien_id"  placeholder="Chọn loại phương tiện" >
                  <option value="">-- Choose --</option>
                      @foreach($dsLoaiPhuongTien as $value)
                        <option value= "{{ $value->id }}" {{$value->id == old('loaiphuongtien_id') ? ' selected' : ''}}> {{$value->tenloaiphuongtien}} </option>
                      @endforeach
              </select>
              @error('loaiphuongtien_id')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

            <div class="form-group">
              <label for="tenphuongtien">Tên phương tiện <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('tenphuongtien') is-invalid @enderror" id="tenphuongtien" name="tenphuongtien" value="{{old('tenphuongtien')}}" placeholder="Tên phương tiện phương tiện" >
              @error('tenphuongtien')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

            <div class="form-group">
              <label for="ngaymua">Ngày mua <abbr title="Required">*</abbr></label>
              <input type="date" class="form-control @error('ngaymua') is-invalid @enderror" id="ngaymua" name="ngaymua" value="{{old('ngaymua')}}" placeholder="Ngày mua" >
              @error('ngaymua')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

            <div class="form-group">
              <label for="nhasanxuat">Nhà sản xuất </label>
              <input type="text" class="form-control @error('nhasanxuat') is-invalid @enderror" id="nhasanxuat" name="nhasanxuat" value="{{old('nhasanxuat')}}" placeholder="Nhà sản xuất" >
              @error('nhasanxuat')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="namsanxuat">Năm sản xuất </label>
              <input type="text" class="form-control @error('namsanxuat') is-invalid @enderror" id="namsanxuat" name="namsanxuat" value="{{old('namsanxuat')}}" placeholder="Năm sản xuất" >
              @error('namsanxuat')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

            <div class="form-group">
              <label for="nuocsanxuat">Nước sản xuất </label>
              <input type="text" class="form-control @error('nuocsanxuat') is-invalid @enderror" id="nuocsanxuat" name="nuocsanxuat" value="{{old('nuocsanxuat')}}" placeholder="Nước sản xuất" >
              @error('nuocsanxuat')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="dientich">Diện tích </label>
              <input type="text" class="form-control @error('dientich') is-invalid @enderror" id="dientich" name="dientich" value="{{old('dientich')}}" placeholder="Diện tích" >
              @error('dientich')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="vitri">Vị trí </label>
              <input type="text" class="form-control @error('vitri') is-invalid @enderror" id="vitri" name="vitri" value="{{old('vitri')}}" placeholder="Vị trí" >
              @error('vitri')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>
            
            <div class="form-group">
              <label for="mota">Mô tả </label>
              <textarea class="form-control @error('mota') is-invalid @enderror" id="mota" name="mota" rows="3" placeholder="Mô tả" >{{old('mota')}}</textarea>
              @error('mota')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

            <div class="form-group">
              <label for="trangthai">Trạng thái </label>
              <input type="text" class="form-control @error('trangthai') is-invalid @enderror" id="trangthai" name="trangthai" value="{{old('trangthai')}}" placeholder="Trạng thái" >
              @error('trangthai')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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