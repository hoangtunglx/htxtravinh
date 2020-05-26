

<?php $__env->startSection('content'); ?>
<div class="page-inner">  
  
  <div class="page-section">
    
    <!-- <div class="section-block">
      
      <div class="metric-row">
        <div class="col-lg-9">
          <div class="metric-row metric-flush">
            
            <div class="col">
              
              <a href="user-teams.html" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Tổng diện tích </h2>
                <p class="metric-value h3">
                  <sub><i class="oi oi-people"></i></sub> <span class="value">50.000 m <sup>2</sup></span>
                </p>
              </a> 
            </div>
            
           
            
            <div class="col">
              
              <a href="user-tasks.html" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Active Tasks </h2>
                <p class="metric-value h3">
                  <sub><i class="fa fa-tasks"></i></sub> <span class="value">64</span>
                </p>
              </a> 
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          
          <a href="user-tasks.html" class="metric metric-bordered">
            <div class="metric-badge">
              <span class="badge badge-lg badge-success"><span class="oi oi-media-record pulse mr-1"></span> Thông báo</span>
            </div>
            <p class="metric-value h3">
              <sub><i class="oi oi-timer"></i></sub> <span class="value">5</span>
            </p>
          </a> 
        </div>
      </div>
    </div> -->
    
    <div class="row">
      
      <div class="col-12 col-lg-6 col-xl-4">
        
        <div class="card card-fluid">
          <div class="card-header"> <i class="fa fa-sun"></i> Thời tiết nông vụ </div>
          <div class="card-body">
            <!-- <h3 class="card-title mb-4"> Thời tiết nông vụ </h3> -->
            <div class="chartjs mb-2" style="height: 292px">
            
              <a class="weatherwidget-io" href="https://forecast7.com/en/9d81106d30/tra-vinh/" data-label_1="Trà Vinh" data-theme="original" >Trà Vinh</a>
              <script>
              !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
              </script>

            </div>
          </div>
        </div>
      </div>
      
      <div class="col-12 col-lg-6 col-xl-8">
        
        <div class="card card-fluid">
          <div class="card-header"> <i class="fa fa-balance-scale"></i> Giá cả thị trường </div>
          <div class="card-body">
            <!-- <h3 class="card-title"> Giá cả thị trường </h3> -->
            <div class="text-center pt-3">
              <div class="chart-inline-group" style="height:214px">
                <div class="easypiechart" data-toggle="easypiechart" data-percent="60" data-size="214" data-bar-color="#346CB0" data-track-color="false" data-scale-color="false" data-rotate="225"></div>
                <div class="easypiechart" data-toggle="easypiechart" data-percent="50" data-size="174" data-bar-color="#00A28A" data-track-color="false" data-scale-color="false" data-rotate="225"></div>
                <div class="easypiechart" data-toggle="easypiechart" data-percent="75" data-size="134" data-bar-color="#5F4B8B" data-track-color="false" data-scale-color="false" data-rotate="225"></div>
              </div>
            </div>
          </div>
          
          <div class="card-footer">
            <div class="card-footer-item">
              <i class="fa fa-fw fa-circle text-indigo"></i> 100% <div class="text-muted small"> Assigned </div>
            </div>
            <div class="card-footer-item">
              <i class="fa fa-fw fa-circle text-purple"></i> 75% <div class="text-muted small"> Completed </div>
            </div>
            <div class="card-footer-item">
              <i class="fa fa-fw fa-circle text-teal"></i> 60% <div class="text-muted small"> Active </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- <div class="col-12 col-lg-6 col-xl-4">
        
        <div class="card card-fluid">
          
          <div class="card-body pb-0">
            <h3 class="card-title"> Leaderboard </h3>
            <ul class="list-inline small">
              <li class="list-inline-item">
                <i class="fa fa-fw fa-circle text-light"></i> Tasks
              </li>
              <li class="list-inline-item">
                <i class="fa fa-fw fa-circle text-purple"></i> Completed
              </li>
              <li class="list-inline-item">
                <i class="fa fa-fw fa-circle text-teal"></i> Active
              </li>
              <li class="list-inline-item">
                <i class="fa fa-fw fa-circle text-red"></i> Overdue
              </li>
            </ul>
          </div>
          
          <div class="list-group list-group-flush">
            
            <div class="list-group-item">
              
              <div class="list-group-item-figure">
                <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="Martha Myers"><img src=" <?php echo e(asset('public/admin/images/avatars/uifaces16.jpg')); ?> " alt=""></a>
              </div>
              
              <div class="list-group-item-body">
                
                <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-circle text-purple"&gt;&lt;/i&gt; 2065&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-teal"&gt;&lt;/i&gt; 231&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-red"&gt;&lt;/i&gt; 54&lt;/div&gt;'>
                  <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="73.46140163642832" aria-valuemin="0" aria-valuemax="100" style="width: 73.46140163642832%">
                    <span class="sr-only">73.46140163642832% Complete</span>
                  </div>
                  <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="8.217716115261473" aria-valuemin="0" aria-valuemax="100" style="width: 8.217716115261473%">
                    <span class="sr-only">8.217716115261473% Complete</span>
                  </div>
                  <div class="progress-bar bg-red" role="progressbar" aria-valuenow="1.92102454642476" aria-valuemin="0" aria-valuemax="100" style="width: 1.92102454642476%">
                    <span class="sr-only">1.92102454642476% Complete</span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="list-group-item">
              
              <div class="list-group-item-figure">
                <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="Tammy Beck"><img src=" <?php echo e(asset('public/admin/images/avatars/uifaces15.jpg')); ?> " alt=""></a>
              </div>
              
              <div class="list-group-item-body">
                
                <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-circle text-purple"&gt;&lt;/i&gt; 1432&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-teal"&gt;&lt;/i&gt; 406&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-red"&gt;&lt;/i&gt; 49&lt;/div&gt;'>
                  <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="54.180855088914115" aria-valuemin="0" aria-valuemax="100" style="width: 54.180855088914115%">
                    <span class="sr-only">54.180855088914115% Complete</span>
                  </div>
                  <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="15.361331819901627" aria-valuemin="0" aria-valuemax="100" style="width: 15.361331819901627%">
                    <span class="sr-only">15.361331819901627% Complete</span>
                  </div>
                  <div class="progress-bar bg-red" role="progressbar" aria-valuenow="1.853953840332955" aria-valuemin="0" aria-valuemax="100" style="width: 1.853953840332955%">
                    <span class="sr-only">1.853953840332955% Complete</span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="list-group-item">
              
              <div class="list-group-item-figure">
                <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="Susan Kelley"><img src=" <?php echo e(asset('public/admin/images/avatars/uifaces17.jpg')); ?> " alt=""></a>
              </div>
              
              <div class="list-group-item-body">
                
                <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-circle text-purple"&gt;&lt;/i&gt; 1271&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-teal"&gt;&lt;/i&gt; 87&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-red"&gt;&lt;/i&gt; 82&lt;/div&gt;'>
                  <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="52.13289581624282" aria-valuemin="0" aria-valuemax="100" style="width: 52.13289581624282%">
                    <span class="sr-only">52.13289581624282% Complete</span>
                  </div>
                  <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="3.568498769483183" aria-valuemin="0" aria-valuemax="100" style="width: 3.568498769483183%">
                    <span class="sr-only">3.568498769483183% Complete</span>
                  </div>
                  <div class="progress-bar bg-red" role="progressbar" aria-valuenow="3.3634126333059884" aria-valuemin="0" aria-valuemax="100" style="width: 3.3634126333059884%">
                    <span class="sr-only">3.3634126333059884% Complete</span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="list-group-item">
              
              <div class="list-group-item-figure">
                <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="Albert Newman"><img src=" <?php echo e(asset('public/admin/images/avatars/uifaces18.jpg')); ?> " alt=""></a>
              </div>
              
              <div class="list-group-item-body">
                
                <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-circle text-purple"&gt;&lt;/i&gt; 1527&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-teal"&gt;&lt;/i&gt; 205&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-red"&gt;&lt;/i&gt; 151&lt;/div&gt;'>
                  <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="75.18463810930577" aria-valuemin="0" aria-valuemax="100" style="width: 75.18463810930577%">
                    <span class="sr-only">75.18463810930577% Complete</span>
                  </div>
                  <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="10.093549975381585" aria-valuemin="0" aria-valuemax="100" style="width: 10.093549975381585%">
                    <span class="sr-only">10.093549975381585% Complete</span>
                  </div>
                  <div class="progress-bar bg-red" role="progressbar" aria-valuenow="7.434761201378631" aria-valuemin="0" aria-valuemax="100" style="width: 7.434761201378631%">
                    <span class="sr-only">7.434761201378631% Complete</span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="list-group-item">
              
              <div class="list-group-item-figure">
                <a href="user-profile.html" class="user-avatar" data-toggle="tooltip" title="Kyle Grant"><img src=" <?php echo e(asset('public/admin/images/avatars/uifaces19.jpg')); ?> " alt=""></a>
              </div>
              
              <div class="list-group-item-body">
                
                <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-circle text-purple"&gt;&lt;/i&gt; 643&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-teal"&gt;&lt;/i&gt; 265&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-red"&gt;&lt;/i&gt; 127&lt;/div&gt;'>
                  <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="36.89041881812966" aria-valuemin="0" aria-valuemax="100" style="width: 36.89041881812966%">
                    <span class="sr-only">36.89041881812966% Complete</span>
                  </div>
                  <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="15.203671830177854" aria-valuemin="0" aria-valuemax="100" style="width: 15.203671830177854%">
                    <span class="sr-only">15.203671830177854% Complete</span>
                  </div>
                  <div class="progress-bar bg-red" role="progressbar" aria-valuenow="7.286288009179575" aria-valuemin="0" aria-valuemax="100" style="width: 7.286288009179575%">
                    <span class="sr-only">7.286288009179575% Complete</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
    
    <!-- Links function -->
    <div class="card card-fluid">
      <div class="card-header">
        <i class="fa fa-universal-access"></i> Chức năng
      </div>
      <div class="card-body">
      
        <div class="section-block text-center text-xl-center">
          <a href="#" class="visual-picker visual-picker-md has-peek px-3">
          
            <div class="visual-picker-figure">
              
              <span class="visual-picker-content"><span class="tile tile-xl bg-info"><i class="oi oi-book oi-3x"></i></span></span> 
            </div>
            
            <span class="visual-picker-peek">Ghi nhật ký</span>
          </a> 
          
          <a href="#" class="visual-picker visual-picker-md has-peek px-3">
          
            <div class="visual-picker-figure">
              
              <span class="visual-picker-content"><span class="tile tile-xl bg-danger"><i class="fa fa-shopping-cart"></i></span></span> 
            </div>
            
            <span class="visual-picker-peek">Hàng hóa - dịch vụ</span>
          </a> 
          
          <a href="#" class="visual-picker visual-picker-md has-peek px-3">
          
            <div class="visual-picker-figure">
              
              <span class="visual-picker-content"><span class="tile tile-xl bg-success"><i class="oi oi-calendar"></i></span></span> 
            </div>
            
            <span class="visual-picker-peek">Kế hoạch sản xuất</span>
          </a> 
          
          <a href="#" class="visual-picker visual-picker-md has-peek px-3">
          
            <div class="visual-picker-figure">
              
              <span class="visual-picker-content"><span class="tile tile-xl bg-warning"><i class="oi oi-puzzle-piece"></i></span></span> 
            </div>
            
            <span class="visual-picker-peek">Đất canh tác</span>
          </a> 
        
          <a href="#" class="visual-picker visual-picker-md has-peek px-3">
            
            <div class="visual-picker-figure">
              
              <span class="visual-picker-content"><span class="tile tile-xl bg-warning"><i class="fa fa-info-circle"></i></span></span> 
            </div>
            
            <span class="visual-picker-peek">Tham khảo canh tác</span>
          </a>

        </div>
							
      </div>
    </div>
    
    <!-- <div class="card-deck-xl">
      
      <div class="card card-fluid pb-3">
        <div class="card-header"> Active Projects </div>
        <div class="lits-group list-group-flush">
          
          <div class="list-group-item">
            
            <div class="list-group-item-figure">
              <div class="has-badge">
                <a href="page-project.html" class="tile tile-md bg-purple">LT</a> <a href="#team" class="user-avatar user-avatar-xs"><img src=" <?php echo e(asset('public/admin/images/avatars/team4.jpg')); ?> " alt=""></a>
              </div>
            </div>
            
            <div class="list-group-item-body">
              <h5 class="card-title">
                <a href="page-project.html">Looper Admin Theme</a>
              </h5>
              <p class="card-subtitle text-muted mb-1"> Progress in 74% - Last update 1d </p>
              <div class="progress progress-xs bg-transparent">
                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="2181" aria-valuemin="0" aria-valuemax="100" style="width: 74%">
                  <span class="sr-only">74% Complete</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="list-group-item">
            
            <div class="list-group-item-figure">
              <div class="has-badge">
                <a href="page-project.html" class="tile tile-md bg-indigo">SP</a> <a href="#team" class="user-avatar user-avatar-xs"><img src=" <?php echo e(asset('public/admin/images/avatars/team1.jpg')); ?> " alt=""></a>
              </div>
            </div>
            
            <div class="list-group-item-body">
              <h5 class="card-title">
                <a href="page-project.html">Smart Paper</a>
              </h5>
              <p class="card-subtitle text-muted mb-1"> Progress in 22% - Last update 2h </p>
              <div class="progress progress-xs bg-transparent">
                <div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="867" aria-valuemin="0" aria-valuemax="100" style="width: 22%">
                  <span class="sr-only">22% Complete</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="list-group-item">
            
            <div class="list-group-item-figure">
              <div class="has-badge">
                <a href="page-project.html" class="tile tile-md bg-yellow">OS</a> <a href="#team" class="user-avatar user-avatar-xs"><img src=" <?php echo e(asset('public/admin/images/avatars/team2.png')); ?> " alt=""></a>
              </div>
            </div>
            
            <div class="list-group-item-body">
              <h5 class="card-title">
                <a href="page-project.html">Online Store</a>
              </h5>
              <p class="card-subtitle text-muted mb-1"> Progress in 99% - Last update 2d </p>
              <div class="progress progress-xs bg-transparent">
                <div class="progress-bar bg-yellow" role="progressbar" aria-valuenow="6683" aria-valuemin="0" aria-valuemax="100" style="width: 99%">
                  <span class="sr-only">99% Complete</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="list-group-item">
            
            <div class="list-group-item-figure">
              <div class="has-badge">
                <a href="page-project.html" class="tile tile-md bg-blue">BA</a> <a href="#team" class="user-avatar user-avatar-xs"><img src=" <?php echo e(asset('public/admin/images/avatars/bootstrap.svg')); ?> " alt=""></a>
              </div>
            </div>
            
            <div class="list-group-item-body">
              <h5 class="card-title">
                <a href="page-project.html">Booking App</a>
              </h5>
              <p class="card-subtitle text-muted mb-1"> Progress in 35% - Last update 4h </p>
              <div class="progress progress-xs bg-transparent">
                <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="112" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                  <span class="sr-only">35% Complete</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="list-group-item">
            
            <div class="list-group-item-figure">
              <div class="has-badge">
                <a href="page-project.html" class="tile tile-md bg-teal">SB</a> <a href="#team" class="user-avatar user-avatar-xs"><img src=" <?php echo e(asset('public/admin/images/avatars/sketch.svg')); ?> " alt=""></a>
              </div>
            </div>
            
            <div class="list-group-item-body">
              <h5 class="card-title">
                <a href="page-project.html">SVG Icon Bundle</a>
              </h5>
              <p class="card-subtitle text-muted mb-1"> Progress in 32% - Last update 1d </p>
              <div class="progress progress-xs bg-transparent">
                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="461" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                  <span class="sr-only">32% Complete</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="list-group-item">
            
            <div class="list-group-item-figure">
              <div class="has-badge">
                <a href="page-project.html" class="tile tile-md bg-pink">SP</a> <a href="#team" class="user-avatar user-avatar-xs"><img src=" <?php echo e(asset('public/admin/images/avatars/team4.jpg')); ?> " alt=""></a>
              </div>
            </div>
            
            <div class="list-group-item-body">
              <h5 class="card-title">
                <a href="page-project.html">Syrena Project</a>
              </h5>
              <p class="card-subtitle text-muted mb-1"> Progress in 93% - Last update 8h </p>
              <div class="progress progress-xs bg-transparent">
                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="3981" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                  <span class="sr-only">93% Complete</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card card-fluid">
        <div class="card-header"> Active Tasks: To-Dos </div>
        <div class="card-body">
          
          <div class="todo-list">
            
            <div class="todo-header"> Looper Admin Theme (1/3) </div>
            
            <div class="todo">
            
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="todo1"> <label class="custom-control-label" for="todo1">Eat corn on the cob</label>
              </div>
            </div>
            
            <div class="todo">
            
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="todo2" checked> <label class="custom-control-label" for="todo2">Mix up a pitcher of sangria</label>
              </div>
            </div>
            
            <div class="todo">
            
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="todo3"> <label class="custom-control-label" for="todo3">Have a barbecue</label>
              </div>
            </div>
            
            <div class="todo">
            
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="todo4"> <label class="custom-control-label" for="todo4">Ride a roller coaster — <span class="text-red small">Overdue in 3 days</span></label>
              </div>
            </div>
            
            <div class="todo-header"> Smart Paper (0/2) </div>
            
            <div class="todo">
            
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="todo5"> <label class="custom-control-label" for="todo5">Bring a blanket and lie on the grass at an outdoor concert</label>
              </div>
            </div>
            
            <div class="todo">
            
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="todo6"> <label class="custom-control-label" for="todo6">Collect seashells at the beach</label>
              </div>
            </div>
            
            <div class="todo">
            
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="todo7"> <label class="custom-control-label" for="todo7">Swim in a lake</label>
              </div>
            </div>
            
            <div class="todo">
            
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="todo8"> <label class="custom-control-label" for="todo8">Get enough sleep!</label>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card-footer">
          <a href="#" class="card-footer-item">View all <i class="fa fa-fw fa-angle-right"></i></a>
        </div>
      </div>
    </div> -->
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('farmer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Wamp64\www\htxtravinh\resources\views/farmer/dashboard.blade.php ENDPATH**/ ?>