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



                    <form method="POST" action="publications">
                        <?php echo csrf_field(); ?>                       

                        <textarea class="form-control" id="message" required name="message" rows="4" cols="50" style="resize: none"> </textarea>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Publicar')); ?>

                                </button>
                                </form>

                                <a class="btn btn-primary" href="<?php echo e(url('list')); ?>"><?php echo e(__('Posts')); ?></a>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Margarida\Desktop\TESTE\project\resources\views/home.blade.php ENDPATH**/ ?>