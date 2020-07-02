<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Informações Pessoais</b></div>
                <div class="card-body">
                    <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ul style="list-style-type: none">
                        <li>Nome: <?php echo e($user -> name); ?></li>
                        <li>Apelido: <?php echo e($user -> surname); ?></li>
                        <li>Email: <?php echo e($user -> email); ?> </li>

                    </ul>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                    <a class="btn btn-primary" href="<?php echo e(url('change-password')); ?>"><?php echo e(__('Alterar Palavra-Passe')); ?></a>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\resources\views/info.blade.php ENDPATH**/ ?>