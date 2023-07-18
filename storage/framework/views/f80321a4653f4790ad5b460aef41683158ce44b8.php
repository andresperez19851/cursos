<?php $__env->startSection('title', 'Dashboard Administración'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Dashboard</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>Bienvenido al registro de cursos CESDE.
    <img src="cesde.jpg" style="display:block;margin:auto;">
    </p>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\websites\cursos\resources\views/welcome.blade.php ENDPATH**/ ?>