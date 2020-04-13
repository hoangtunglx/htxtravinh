
@extends('officer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('officer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
        </li>
      </ol>
    </nav>
    
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Số thửa đất </h1>
      <div id="dt-buttons" class="btn-toolbar"></div>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
     <div class="container-fluid dashboard-content">
	 <div class="row">
		<div class="col-xl-12">

			<div class="row">

						   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="cards">
                                   
                                   
                                </div>
                            </div>
                             @foreach($dsThuaDat  as $thuaDat)
							<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-title">Thửa đất {{$thuaDat->tenthuadat}}</h3>
                                        <p class="card-text">Diện tích {{$thuaDat->dientich}}m²</p>
                                          <p class="card-text">Tờ bản đồ {{$thuaDat->tobando}}</p>
                                        <a href="{{ route('officer.thongtinmoitruong.index', ['id'=>$thuaDat->id])}} "class=" btn btn-primary">TT môi trường</a>
                                    </div>
                                </div>
                            </div>
                          @endforeach

                        </div>

					</div>
					</div>
					</div>


    </div>
  </div>
</div>

@endsection
