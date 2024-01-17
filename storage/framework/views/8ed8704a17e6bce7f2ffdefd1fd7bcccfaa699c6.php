
<h1>Register</h1>
        
    <form style="text-align:center" action="<?php echo e(route('store')); ?>" method="post"><?php echo csrf_field(); ?>
        <div>
            <label>Name</label><input type="text"  id="name" name="name">
        </div>    
        <div>
            <label for="email" >Email Address</label><input type="email"  id="email" name="email">
        </div>
        <div>
            <label for="password">Password</label><input type="password" id="password" name="password">
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label><input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        <br><br>           
        <input type="submit" value="Register">
                    
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
    <?php /**PATH C:\xampp\htdocs\proiecte\ProiectArticoleLaravel\resources\views/auth/register.blade.php ENDPATH**/ ?>