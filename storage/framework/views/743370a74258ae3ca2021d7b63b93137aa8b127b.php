<html>
    <head>
        <title>Lista de Publicações</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Mensagem</th>
                </tr>
            </thead>

            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $publications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr> 
                    <td> <?php echo e($publication -> message); ?></td> 
                    <td> <?php echo e($publication -> dataPublicacao); ?></td> 
            <form method="post" action="/pub/list/<?php echo e($publication -> id); ?>">
                <?php echo e(method_field('DELETE')); ?>

                <?php echo csrf_field(); ?>
                <td><button type='submit' class="btn btn-default" >Eliminar</button></td>
            </form>    
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\project\resources\views/pub/list.blade.php ENDPATH**/ ?>