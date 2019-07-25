<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Post <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nav item again</a>
                    </li>
                </ul>
            </nav>

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1><?php echo e($post->title); ?></h1>
                <div class="col-sm-8 blog-main">
                    <p><?php echo e($post->description); ?></p>
                    <a href="<?php echo e(route('post.edit', ['id' => $post->id])); ?>">
                        <button type="button" class="btn btn-primary btn-sm">Edit Post</button>
                    </a>
                    <a href="<?php echo e(route('post.delete', ['id' => $post->id])); ?>">
                        <button type="button" class="btn btn-danger btn-sm">Delete Post</button>
                    </a>
                </div>
            </main>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\muvaecommerce\resources\views/post/post_detail.blade.php ENDPATH**/ ?>