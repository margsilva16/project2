<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Olá <?php echo e(Auth::user()->name); ?>. Em que estás a pensar?</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>



                    <form method="POST" action="publicar">
                        <?php echo csrf_field(); ?>                       

                        <textarea class="form-control" id="message" required name="message" rows="4" cols="50" style="resize: none"> </textarea>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Publicar')); ?>

                                </button>
                                </form>
                            </div>
                        </div>

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
                            <form method="post" action="/home/<?php echo e($publication -> id); ?>">
                                <?php echo e(method_field('DELETE')); ?>

                                <?php echo csrf_field(); ?>
                                <td><button type='submit' class="btn btn-default" >Eliminar</button></td>
                            </form>    
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div> 
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

    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Margarida\Desktop\Margarida\resources\views/home.blade.php ENDPATH**/ ?>