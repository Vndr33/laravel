<div>
    <div>

        <div>
            <div>Login</div>
            <div>
                <form action="<?php echo e(route('authenticate')); ?>" method="post">
                <?php echo csrf_field(); ?>
                    <div >
                        <label for="email">Email Address</label>
                        <div>
                          <input type="email" id="email" name="email">
                        </div>  
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <div>
                          <input type="password" id="password" name="password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div><?php /**PATH C:\xampp\htdocs\proiecte\CustomLoginRegister\resources\views/auth/login.blade.php ENDPATH**/ ?>