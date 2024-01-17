
<div>
    <div>
        <div class="card">
            <div>Dashboard</div>
            <div>
                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e($message); ?>

                    </div>
                <?php else: ?>
                    <div class="alert alert-success">
                        You are logged in!
                    </div>       
                <?php endif; ?>                
            </div>
        </div>
    </div>    
</div>
<?php /**PATH C:\xampp\htdocs\proiecte\CustomLoginRegister\resources\views/auth/dashboard.blade.php ENDPATH**/ ?>