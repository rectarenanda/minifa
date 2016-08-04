<?php $__env->startSection('namauser'); ?>
  <?php echo e(isset($user->user_name) ? $user->user_name : 'Default'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('profiluser'); ?>
    <!-- <img src="" class="img-circle" alt="User Image"> -->
      <p>
        <?php echo e(isset($user->comp_name) ? $user->comp_name : 'Perusahaan Coba'); ?>

        <small>Member since Nov. 2012</small>
      </p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php foreach($grup as $lala): ?>
    <p>This is Group <?php echo e($lala->coa_name); ?></p>
<?php endforeach; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>