<h1>Login</h1>
        <form style="text-align:center" action="<?php echo e(route('authenticate')); ?>" method="post">
            <?php echo csrf_field(); ?>
                <div >
                    <label for="email">Email Address</label>
                        <input type="email" id="email" name="email"> 
                        <br><br>

                    <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                </div>
                
                <br><br>    
                 <div>
                    <input type="submit" value="Login">
                </div>
                <?php if($errors->has('email')): ?>
                            <div style="text-align:center" >
                                <span style="color:red;font-family:verdana" class="invalid-feedback"><?php echo e($errors->first('email')); ?></span>
                            </div>
                <?php endif; ?>
                
        </form>

 <style>
    h1{
        color:black;
        font-family:verdana;
        text-align:center; 
        padding:5%
    }
    div {
        margin-bottom: 10px;
    }
    label {
        display: inline-block;
        width: 150px;
        color:green;
        font-family:verdana;
    }
</style>
    <?php /**PATH C:\xampp\htdocs\proiecte\ProiectArticoleLaravel\resources\views/auth/login.blade.php ENDPATH**/ ?>