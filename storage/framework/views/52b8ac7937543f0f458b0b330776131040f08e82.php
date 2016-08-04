<?php $__env->startSection('namauser'); ?>
    <?php foreach($comps as $user): ?> 
        <?php echo e($user->PERUSAHAAN_USER); ?>

    <?php endforeach; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('profiluser'); ?>
    <?php foreach($comps as $comp): ?>
        <p>
                  <?php echo e($comp->PERUSAHAAN_NAMA); ?>

                  <small>Member since Nov. 2012</small>
                </p>
    <?php endforeach; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <style>
            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    <div class="content">
        <div class="title">Selamat Datang Di GEN1 Mini FA</div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>