<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">   <?php echo e(__('messages.sklad.page.index')); ?></div>

                    <div class="card-body">

                        <a class="btn btn-success" href="<?php echo e(route('sklads.add')); ?>" role="button">
                            <?php echo e(__('messages.add')); ?>

                        </a><br><br>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col"><?php echo e(__('messages.sklad.page.index.tabname')); ?></th>
                                <th scope="col"><?php echo e(__('messages.users.page.index.tabevent')); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <td>
                                            <?php echo e($data->id); ?>

                                        </td>
                                        <td>
                                            <?php echo e($data->name); ?>

                                        </td>
                                        <td>
                                            <a class="btn btn-secondary" href="<?php echo e(route('sklads.edit',['id'=>$data->id ])); ?>" role="button">
                                                <?php echo e(__('messages.edit')); ?>

                                            </a>
                                            <a class="btn btn-danger" href="<?php echo e(route('sklads.delete',['id'=>$data->id ])); ?>" role="button">
                                                <?php echo e(__('messages.delete')); ?>

                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livpoint/resources/views/back/sklad/sklads.blade.php ENDPATH**/ ?>