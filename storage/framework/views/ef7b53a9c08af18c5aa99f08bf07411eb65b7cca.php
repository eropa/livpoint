<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">   <?php echo e(__('messages.users.page.edit')); ?></div>

                    <div class="card-body">
                        <form method="post" action="<?php echo e(route('users.update',['id'=>$user->id])); ?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?php echo e(__('messages.users.page.index.tabname')); ?></label>
                                <input type="text"
                                       class="form-control"
                                       value="<?php echo e($user->name); ?>"
                                       required name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?php echo e(__('messages.users.page.index.tabemail')); ?></label>
                                <input type="email"
                                       value="<?php echo e($user->email); ?>"
                                       class="form-control" required name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"><?php echo e(__('messages.users.page.index.tabrole')); ?></label>
                                <select class="form-control" id="exampleFormControlSelect1" required name="role">
                                    <option value="admindb"
                                        <?php if($user->role=='admindb'): ?>
                                            selected
                                        <?php endif; ?>
                                    ><?php echo e(__('messages.users.role.admindb')); ?></option>
                                    <option value="admin"
                                        <?php if($user->role=='admin'): ?>
                                            selected
                                        <?php endif; ?>
                                    ><?php echo e(__('messages.users.role.admin')); ?></option>
                                    <option value="oper"
                                        <?php if($user->role=='oper'): ?>
                                            selected
                                        <?php endif; ?>
                                    ><?php echo e(__('messages.users.role.oper')); ?></option>
                                </select>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/livpoint/resources/views/back/users/edit.blade.php ENDPATH**/ ?>