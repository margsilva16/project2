<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Lista de Posts</b></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Mensagem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php ($c = 0); ?>
                            <?php $__currentLoopData = $publications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publication): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php ($c++); ?>
                            <tr> 
                                <td><div id="D<?php echo $c; ?>R"> <?php echo e($publication -> message); ?></div></td> 
                                <td><input type="button" class="btn btn-default" id="D<?php echo $c; ?>" value="Down" class="move down"  onClick="MoveDown('D<?php echo $c; ?>', 'D<?php echo $c + 1; ?>');"/></td>
                                <td><input type="button" class="btn btn-default" id="U<?php echo $c; ?>" value="Up" class="move up"  onClick="MoveUp('D<?php echo $c; ?>', 'D<?php echo $c - 1; ?>');"/></td>
                        <form method="post" action="/list/<?php echo e($publication -> id); ?>">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo csrf_field(); ?>
                            <td><button type='submit' class="btn btn-default" >Eliminar</button></td>
                        </form>    
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="<?php echo e(route('home')); ?>"><?php echo e(__('Página Inicial')); ?></a>
                    <script type="text/javascript">
                        function MoveDown(roww, rowwN)
                        {
                            divv = document.getElementById(roww + 'R').innerHTML;
                            if (roww)
                            {
                                ch = document.getElementById(rowwN + 'R').innerHTML;
                                document.getElementById(rowwN + 'R').innerHTML = document.getElementById(roww + 'R').innerHTML;
                                document.getElementById(roww + 'R').innerHTML = ch;
                            }
                        }
                        function MoveUp(roww, rowwN)
                        {
                            divv = document.getElementById(roww + 'R').innerHTML;
                            if (roww)
                            {
                                ch = document.getElementById(rowwN + 'R').innerHTML;
                                document.getElementById(rowwN + 'R').innerHTML = document.getElementById(roww + 'R').innerHTML;
                                document.getElementById(roww + 'R').innerHTML = ch;
                            }
                        }
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/list.blade.php ENDPATH**/ ?>