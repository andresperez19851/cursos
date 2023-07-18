
<?php $__env->startSection('title', 'Docentes'); ?>
<?php $__env->startSection('content_header'); ?>
    <h1>Lista Docentes</h1>
   
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(session('mensaje')): ?>
        <div class="alert alert-success">
            <strong>
            <?php echo e(session('mensaje')); ?> 
            </strong>
        </div>
    <?php endif; ?>
   
        <div class="card-header">
        <a href="<?php echo e(route('docente.create')); ?>" class="btn btn-primary">Crear registro</a>
        </div>
    
   <div class="card">
    <div class="card-body">
        <table id="productos" class="table table-striped">
            <thead>
                <tr style="text-align:center;">
               
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Documento</th>
                  <th>Correo</th>
                  <th colspan="2">Acciones</th>
               
                </tr>
                <tbody>
                    <?php $__currentLoopData = $docentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr style="text-align:center;">
                            <td><?php echo e($lista->id); ?></td>
                            <td><?php echo e($lista->nombre); ?></td>
                            <td><?php echo e($lista->documento); ?> 
                            <td><?php echo e($lista->correo); ?></td>
                            <td><a href="<?php echo e(route('docente.edit', $lista)); ?>" class="btn btn-primary btn-sm">Gestionar</a></td>
                            <td>
                               
                                        <form action="<?php echo e(route('docente.destroy',  $lista)); ?>" method="POST">
                                            <?php echo method_field('delete'); ?>
                                            <?php echo csrf_field(); ?>
                                            <input type="submit" value="Eliminar" class="btn btn-danger btn-sm" onclick="return aceptar();">
                                        </form>
                                  
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </thead>
        </table>
       
    </div>
   </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
        <script>
        function aceptar() {
             
            if(confirm('¿Esta seguro de eliminar el registro?')){
                return true;
            }else{
                return false;
            }
        }
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\websites\cursos\resources\views/docentes/index.blade.php ENDPATH**/ ?>