<?php $__env->startSection('content'); ?>

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" <?php echo e(route('farmer.dashboard')); ?> "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
          <a href=" <?php echo e(route('farmer.loaigiong.index')); ?> "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Loại giống</a>
        </li>
      </ol>
    </nav>
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Loại giống <small> Tạo mới </small> </h1>
    </div>
  </header>
  <div class="page-section">
    <div class="card card-fluid">
      <div class="card-body">

        <?php echo $__env->make('layouts.blocks.flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <form action=" <?php echo e(route('farmer.loaigiong.store')); ?> " method="post">
          <?php echo csrf_field(); ?>
          <fieldset>
            <div class="form-group">
              <label for="tenloaigiong">Tên loại giống <abbr title="Required">*</abbr></label>
              <input type="text" class="form-control <?php $__errorArgs = ['tenloaigiong'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tenloaigiong" name="tenloaigiong" value="<?php echo e(old('tenloaigiong')); ?>" placeholder="Tên loại giống" autofocus>
              <?php $__errorArgs = ['tenloaigiong'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> <?php echo e($message); ?> </div>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <div class="form-group">
              <label for="mota">Mô tả </label>
              <textarea class="form-control <?php $__errorArgs = ['mota'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="mota" name="mota" rows="3" placeholder="Mô tả" autofocus><?php echo e(old('mota')); ?></textarea>
              <?php $__errorArgs = ['mota'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <div class="invalid-feedback"> <i class="fa fa-exclamation-circle fa-fw"></i> <?php echo e($message); ?> </div>  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('farmer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/DATA/www/htxtravinh/resources/views/farmer/loaigiong_create.blade.php ENDPATH**/ ?>