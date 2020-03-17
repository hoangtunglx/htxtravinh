<?php $__env->startSection('content'); ?>

<div class="page-inner">
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href=" <?php echo e(route('admin.dashboard')); ?> "><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
        </li>
      </ol>
    </nav>
    <a href=" <?php echo e(route('admin.giong.create')); ?> "> <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>

    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> Giống </h1>
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
              <th> Loại giống id </th>
              <th> Tên giống </th>
              <th> Đặc tính </th>
              <th> Màu sắc </th>
              <th> Mô tả </th>
              <th style="width:100px; min-width:100px;"> &nbsp; </th>
            </tr>
          </thead>
          <?php $__currentLoopData = $dsGiong ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $giong): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td class="text-center"> <?php echo e($loop->iteration); ?> </td>
            <td> <?php echo e($giong->loaigiong->tenloaigiong); ?> </td>
            <td> <?php echo e($giong->tengiong); ?> </td>
            <td> <?php echo e($giong->dactinh); ?> </td>
            <td> <?php echo e($giong->mausac); ?> </td>
            <td> <?php echo e($giong->mota); ?> </td>
            <td class="text-center">
              <form action="<?php echo e(route('admin.giong.delete', ['id'=>$giong->id])); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <a href="<?php echo e(route('admin.giong.edit', ['id' => $giong->id])); ?>" class="btn btn-warning btn-sm btn-icon " title="Chỉnh sửa"><i class="fa fa-pencil-alt"></i></a>
                <button type="submit" class="btn btn-danger btn-delete btn-sm btn-icon" title="Xóa"> <i class="fa fa-trash"></i></button>
              </form>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
      </div>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /mnt/DATA/www/htxtravinh/resources/views/admin/giong_index.blade.php ENDPATH**/ ?>