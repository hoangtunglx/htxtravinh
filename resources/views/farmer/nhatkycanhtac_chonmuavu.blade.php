@extends('farmer.layouts.master')

@section('content')

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" {{ route('farmer.dashboard') }} "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
        </li>
      </ol>
    </nav>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-header"> <h2 class="card-title text-center">  Chọn mùa vụ <i class="fa fa-question-circle"></i> </h2> </div>
      <div class="card-body">
        @include('layouts.blocks.flash_message')
        <div class="section-block text-center text-xl-center">
          @foreach($dsMuaVu ?? [] as $muaVu)
          <a href="{{ route('farmer.nhatky.muavu.thuadat', ['id' => $muaVu->id]) }}" class="visual-picker visual-picker-md has-peek px-6">
            <div class="visual-picker-figure">
              <span class="visual-picker-content"><span class="tile tile-xl bg-info"><i class="oi oi-check oi-3x"></i></span></span> 
            </div>
            <span class="visual-picker-peek">{{ $muaVu->tenkehoachsanxuatmuavu . " (" . $muaVu->tenmuavu . ")"}}</span>
          </a> 
          @endforeach
        </div>

      </div>
    </div>
  </div>
</div>

@endsection