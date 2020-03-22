<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">   <?php echo e(__('messages.sklad.page.edit')); ?></div>

                    <div class="card-body">
                        <form method="post" action="<?php echo e(route('sklads.update',['id'=>$data->id])); ?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?php echo e(__('messages.sklad.page.index.tabname')); ?></label>
                                <input type="text"
                                       class="form-control"
                                       required
                                       value="<?php echo e($data->name); ?>"
                                       name="name">
                            </div>

                            <button type="submit" class="btn btn-primary"><?php echo e(__('messages.edit')); ?></button>
                            <?php echo csrf_field(); ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livpoint/resources/views/back/sklad/edit.blade.php ENDPATH**/ ?>