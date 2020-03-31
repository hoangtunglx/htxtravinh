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
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Loại giống </h1>
      <div id="dt-buttons" class="btn-toolbar"></div>
    </div>
  </header>
  <div class="page-section">

    <div class="card card-fluid">
								
      <div class="card-body">

        <?php echo $__env->make('layouts.blocks.flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <table id="table-datatable-default" class="table">
          <thead>
            <tr>
              <th class="text-center"> # </th>
              <th> Tên loại giống </th>
              <th> Mô tả </th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $dsLoaiGiong ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loaiGiong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td class="text-center"> <?php echo e($loop->iteration); ?> </td>
              <td> <?php echo e($loaiGiong->tenloaigiong); ?> </td>
              <td> <?php echo e($loaiGiong->mota); ?> </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('farmer.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\htxtravinh\resources\views/farmer/loaigiong_index.blade.php ENDPATH**/ ?>