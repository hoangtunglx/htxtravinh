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
      <h1 class="page-title mr-sm-auto"> Thông tin thời tiết <small> Chỉnh sửa </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        @include('layouts.blocks.flash_message')

        <form action=" {{ route('admin.thongtinmoitruong.update') }} " method="post" >
          @csrf()
          @method('PUT')
          <input type="hidden" name="thongtinmoitruongid" value=" {{ $thongTinMoiTruong->id }} ">
          <input type="hidden" name="thuadat_id" value=" {{ $thongTinMoiTruong->thuadat_id }} ">

         

          <fieldset>

		
		    	
       

            <div class="form-group">
              <label for="nhietdo">Nhiệt độ <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('nhietdo') is-invalid @enderror" id="nhietdo" name="nhietdo" value="{{old('nhietdo',  $thongTinMoiTruong->nhietdo)}}" placeholder="Nhiệt độ" autofocus>
              @error('nhietdo')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

              <div class="form-group">
              <label for="doamkhongkhi">Độ ẩm không khí <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('doamkhongkhi') is-invalid @enderror" id="doamkhongkhi" name="doamkhongkhi" value="{{old('doamkhongkhi',  $thongTinMoiTruong->doamkhongkhi)}}" placeholder="Độ ẩm không khí" autofocus>
              @error('doamkhongkhi')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

              <div class="form-group">
              <label for="doamdat">Độ ẩm đất <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('doamkhongkhi') is-invalid @enderror" id="doamdat" name="doamdat" value="{{old('doamdat',  $thongTinMoiTruong->doamdat)}}" placeholder="Độ ẩm đất" autofocus>
              @error('doamdat')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

              <div class="form-group">
              <label for="doph">Độ PH <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('doamkhongkhi') is-invalid @enderror" id="doph" name="doph" value="{{old('doph',  $thongTinMoiTruong->doph)}}" placeholder="Độ ẩm đất" autofocus>
              @error('doph')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

             <div class="form-group">
              <label for="doman">Độ mặn <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('doamkhongkhi') is-invalid @enderror" id="doman" name="doman" value="{{old('doman',  $thongTinMoiTruong->doman)}}" placeholder="Độ mặn" autofocus>
              @error('doman')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

             <div class="form-group">
              <label for="mucnuoc">Mực nước <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control @error('mucnuoc') is-invalid @enderror" id="mucnuoc" name="mucnuoc" value="{{old('mucnuoc',  $thongTinMoiTruong->mucnuoc)}}" placeholder="Mực nước" autofocus>
              @error('mucnuoc')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
            </div>

         

             <div class="form-group">
              <label for="tinhtrang">Mô tả </label>
              <textarea class="form-control @error('tinhtrang') is-invalid @enderror" id="tinhtrang" name="tinhtrang" rows="3" placeholder="Mô tả" autofocus>{{old('tinhtrang', $thongTinMoiTruong->tinhtrang)}}</textarea>
              @error('tinhtrang')  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> {{ $message }} </div>  @enderror
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
