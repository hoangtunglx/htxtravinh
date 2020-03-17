<?php if(session('message')): ?>
<div class="alert <?php echo e(session('result') ? 'alert-success' : 'alert-danger'); ?> has-icon alert-dismissible fade show">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <div class="alert-icon">
    <span class="oi oi-<?php echo e(session('result') ? 'check' : 'bullhorn'); ?>"></span>
  </div>
  <strong> <?php echo session('message'); ?> </strong>
</div>
<?php endif; ?><?php /**PATH /mnt/DATA/www/htxtravinh/resources/views/layouts/blocks/flash_message.blade.php ENDPATH**/ ?>