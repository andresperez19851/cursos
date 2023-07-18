
<?php $__env->startSection('title', 'Cursos'); ?>
<?php $__env->startSection('content_header'); ?>
    <h1>Lista Cursos</h1>
   
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
        <a href="<?php echo e(route('curso.create')); ?>" class="btn btn-primary">Crear registro</a>
        </div>
    
   <div class="card">
    <div class="card-body">
        <table id="productos" class="table table-striped">
            <thead>
                <tr style="text-align:center;">
                  <th>ID</th>
                  <th>Curos</th>
                  <th>Descripción</th>
                  <th>Duración</th>
                  <th>Precio</th>
                  <th>Fecha</th>
                  <th>Docente</th>
                  <th colspan="2">Acciones</th>
               
                </tr>
                <tbody>
                    <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr style="text-align:center;">
                            <td><?php echo e($lista->id); ?></td>
                            <td><?php echo e($lista->curso); ?></td>
                            <td><?php echo e($lista->descripcion); ?> 
                            <td><?php echo e($lista->duracion); ?></td>
                            <td><?php echo e($lista->precio); ?></td>
                            <td><?php echo e($lista->fecha); ?></td>
                            <td><?php echo e($lista->docente); ?></td>
                            <td><a href="<?php echo e(route('curso.edit', $lista)); ?>" class="btn btn-primary btn-sm">Gestionar</a></td>
                            <td>
                               
                                        <form action="<?php echo e(route('curso.destroy',  $lista)); ?>" method="POST">
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\websites\cursos\resources\views/cursos/index.blade.php ENDPATH**/ ?>