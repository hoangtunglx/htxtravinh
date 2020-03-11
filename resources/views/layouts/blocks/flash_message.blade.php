@if(session('message'))
<div class="alert {{session('result') ? 'alert-success' : 'alert-danger'}} has-icon alert-dismissible fade show">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <div class="alert-icon">
    <span class="oi oi-{{session('result') ? 'check' : 'bullhorn'}}"></span>
  </div>
  <strong> {!! session('message') !!} </strong>
</div>
@endif