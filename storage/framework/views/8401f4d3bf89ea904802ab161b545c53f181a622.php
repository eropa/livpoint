<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">   <?php echo e(__('messages.users.page.add')); ?></div>

                    <div class="card-body">
                        <form method="post" action="<?php echo e(route('users.store')); ?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?php echo e(__('messages.users.page.index.tabname')); ?></label>
                                <input type="text" class="form-control" required name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?php echo e(__('messages.users.page.index.tabemail')); ?></label>
                                <input type="email" class="form-control" required name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" required name="password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"><?php echo e(__('messages.users.page.index.tabrole')); ?></label>
                                <select class="form-control" id="exampleFormControlSelect1" required name="role">
                                    <option value="" selected>........</option>
                                    <option value="admindb"><?php echo e(__('messages.users.role.admindb')); ?></option>
                                    <option value="admin"><?php echo e(__('messages.users.role.admin')); ?></option>
                                    <option value="oper"><?php echo e(__('messages.users.role.oper')); ?></option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary"><?php echo e(__('messages.add')); ?></button>
                            <?php echo csrf_field(); ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livpoint/resources/views/back/users/add.blade.php ENDPATH**/ ?>