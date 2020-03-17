<?php $__env->startSection('content'); ?>

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" <?php echo e(route('farmer.dashboard')); ?> "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
        </li>
      </ol>
    </nav>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-header"> <h2 class="card-title text-center">  Chọn mùa vụ <i class="fa fa-question-circle"></i> </h2> </div>
      <div class="card-body">
        <?php echo $__env->make('layouts.blocks.flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="section-block text-center text-xl-center">
          <?php $__currentLoopData = $dsMuaVu ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $muaVu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="<?php echo e(route('farmer.nhatky.muavu.thuadat', ['id' => $muaVu->id])); ?>" class="visual-picker visual-picker-md has-peek px-6">
            <div class="visual-picker-figure">
              <span class="visual-picker-content"><span class="tile tile-xl bg-info"><i class="oi oi-check oi-3x"></i></span></span> 
            </div>
            <span class="visual-picker-peek"><?php echo e($muaVu->tenkehoachsanxuatmuavu . " (" . $muaVu->tenmuavu . ")"); ?></span>
          </a> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('farmer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/DATA/www/htxtravinh/resources/views/farmer/nhatkycanhtac_chonmuavu.blade.php ENDPATH**/ ?>