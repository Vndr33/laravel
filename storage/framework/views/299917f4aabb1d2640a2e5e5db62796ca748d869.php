

<?php $__env->startSection('content'); ?>

<div>
    <div>

        <div>
            <div>Register</div>
            <div>
                <form action="<?php echo e(route('store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div>
                        <label>Name</label>
                        <div>
                          <input type="text"  id="name" name="name">
                        </div>
                    </div>
                    <div>
                        <label for="email" >Email Address</label>
                        <div>
                          <input type="email"  id="email" name="email">
                        </div>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <div>
                          <input type="password" id="password" name="password">
                        </div>
                    </div>
                    <div>
                        <label for="password_confirmation">Confirm Password</label>
                        <div>
                          <input type="password" id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>
                    <div>
                        <input type="submit" value="Register">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proiecte\CustomLoginRegister\resources\views/auth/register.blade.php ENDPATH**/ ?>