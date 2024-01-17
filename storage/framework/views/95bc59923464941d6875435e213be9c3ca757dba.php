<div class="card">
    <form action="<?php echo e(url('logout')); ?>" method="POST"> <?php echo csrf_field(); ?>
        <button style="display: block; margin-left: auto; margin-right: 5%;" type="submit"> Logout </button>
    </form>
    <h1 style="text-align:center">Articles Webpage</h1>
    <h1>Create Article</h1>

</div>
    <form action="<?php echo e(url('createArticle')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea>

        <label for="author">Author:</label>
        <input type="text" name="author" id="author" required>

        <label for="category">Category:</label>
        <input type="text" name="category" id="category" required>

        <button type="submit">Submit</button>
    </form>

        <?php if($role === "admin"): ?>
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($article['validate'] === 1): ?> 
                    <div style="border: thin solid green">
                   <h2><?php echo e($article['author']); ?></h2>
                   <h2><?php echo e($article['title']); ?></h2>
                   <h2><?php echo e($article['description']); ?></h2>
                    </div>
                <?php else: ?> 
                    <div style="border: thin solid red">
                    <h2><?php echo e($article['author']); ?></h2>
                    <h2><?php echo e($article['title']); ?></h2>
                    <h2><?php echo e($article['description']); ?></h2>
                    <form action="<?php echo e(url('valideaza')); ?>" method="POST"><?php echo csrf_field(); ?><input type="hidden" name="articolId" value="<?php echo e($article['id']); ?>"><button style="display: block; margin-left: auto; margin-right: 5%;" type="submit"> Valideaza </button> </form>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div style="font-size:300%;">Artistic </div>
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($article['validate'] === 1): ?> 
                    <?php if($article['category'] === 'cat1'): ?>
                    <div style="border: thin solid black">
                    <h2 style="font-size:300%;"><?php echo e($article['title']); ?>  </h2>
                    <h2 style="font-size:130%; color:grey;"><?php echo e($article['author']); ?></h2>
                    <h2><?php echo e($article['description']); ?></h2>
                    <h2 style="font-size:30%; color:grey;">Creation date: <?php echo e($article['creationdate']); ?></h2>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div style="font-size:300%;">Tehnic </div>
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($article['validate'] === 1): ?> 
                    <?php if($article['category'] === 'cat2'): ?>
                    <div style="border: thin solid black">
                    <h2 style="font-size:300%;"><?php echo e($article['title']); ?>  </h2>
                    <h2 style="font-size:130%; color:grey;"><?php echo e($article['author']); ?></h2>
                    <h2><?php echo e($article['description']); ?></h2>
                    <h2 style="font-size:30%; color:grey;">Creation date: <?php echo e($article['creationdate']); ?></h2>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div style="font-size:300%;">Moda</div>
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($article['validate'] === 1): ?> 
                    <?php if($article['category'] === 'cat3'): ?>
                    <div style="border: thin solid black">
                    <h2 style="font-size:300%;"><?php echo e($article['title']); ?>  </h2>
                    <h2 style="font-size:130%; color:grey;"><?php echo e($article['author']); ?></h2>
                    <h2><?php echo e($article['description']); ?></h2>
                    <h2 style="font-size:30%; color:grey;">Creation date: <?php echo e($article['creationdate']); ?></h2>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div style="font-size:300%;">Science</div>
            <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($article['validate'] === 1): ?> 
                    <?php if($article['category'] === 'cat4'): ?>
                    <div style="border: thin solid black">
                    <h2 style="font-size:300%;"><?php echo e($article['title']); ?>  </h2>
                    <h2 style="font-size:130%; color:grey;"><?php echo e($article['author']); ?></h2>
                    <h2><?php echo e($article['description']); ?></h2>
                    <h2 style="font-size:30%; color:grey;">Creation date: <?php echo e($article['creationdate']); ?></h2>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\proiecte\ProiectArticoleLaravel\resources\views/auth/dashboard.blade.php ENDPATH**/ ?>