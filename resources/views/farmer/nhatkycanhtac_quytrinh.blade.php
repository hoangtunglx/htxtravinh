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
    <div class="page has-sidebar has-sidebar-expand-xl">
					
      <div class="page-inner">
        <div class="page-section">
          
         csd
        </div>
      </div>
      
      <div class="page-sidebar">
        
        <div class="card card-reflow">
          <!-- <div class="card-body">
            <h4 class="card-title"> Nhật ký </h4>
            <div class="progress progress-sm rounded-0 mb-1">
              <div class="progress-bar bg-success w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="text-muted text-weight-bolder small"> $2,322 of $3,076 </p>
          </div> -->
          <div class="card-body border-top">
            <h4 class="card-title"> Nhật ký đã ghi </h4>
            <ul class="timeline timeline-dashed-line">
              
              <li class="timeline-item">
                
                <div class="timeline-figure">
                  <span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
                </div>
                
                <div class="timeline-body">
                  <h6 class="timeline-heading"> Invoice created </h6><span class="timeline-date">08/18/2018 – 12:42 PM</span>
                </div>
              </li>
              
              <li class="timeline-item">
                
                <div class="timeline-figure">
                  <span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
                </div>
                
                <div class="timeline-body">
                  <h6 class="timeline-heading">
                    Invoice sent <a href="#" class="text-muted"><small>details</small></a>
                  </h6><span class="timeline-date">08/18/2018 – 12:42 PM</span>
                </div>
              </li>
              
              <li class="timeline-item">
                
                <div class="timeline-figure">
                  <span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
                </div>
                
                <div class="timeline-body">
                  <h6 class="timeline-heading"> Invoice viewed </h6><span class="timeline-date">08/19/2018 – 09:11 AM</span>
                </div>
              </li>
              
              <li class="timeline-item">
                
                <div class="timeline-figure">
                  <span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
                </div>
                
                <div class="timeline-body">
                  <h6 class="timeline-heading">
                    Invoice partial paid <a href="#" class="text-muted"><small>details</small></a>
                  </h6><span class="timeline-date">08/19/2018 – 10:36 AM</span>
                </div>
              </li>
              
              <li class="timeline-item">
                
                <div class="timeline-figure">
                  <span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
                </div>
                
                <div class="timeline-body">
                  <h6 class="timeline-heading">
                    Invoice sent <a href="#" class="text-muted"><small>details</small></a>
                  </h6><span class="timeline-date">12/21/2018 – 12:42 PM</span>
                </div>
              </li>
              
              <li class="timeline-item">
                
                <div class="timeline-figure">
                  <span class="tile tile-circle tile-xs"><i class="fa fa-check d-none"></i></span>
                </div>
                
                <div class="timeline-body">
                  <h6 class="timeline-heading"> Invoice viewed </h6>
                </div>
              </li>
              
              <li class="timeline-item">
                
                <div class="timeline-figure">
                  <span class="tile tile-circle tile-xs"><i class="fa fa-check d-none"></i></span>
                </div>
                
                <div class="timeline-body">
                  <h6 class="timeline-heading"> Invoice fully paid </h6>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection