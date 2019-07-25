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
                <h1>Posts
                    <a href="<?php echo e(route('post.form')); ?>">
                        <button type="button" class="btn btn-primary btn-sm">Create Post</button>
                    </a>
                </h1>
                <?php if(Session::has('succes')): ?>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                            <div id="message" class="alert alert-success">
                                <?php echo e(Session::get('succes')); ?>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Learn more</th>
                        <th>Created on</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($posts): ?>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th><?php echo e($loop->iteration); ?></th>
                                <td><?php echo e($post->title); ?></td>
                                <td><?php echo e($post->name); ?></td>
                                <td>
                                    <a href="<?php echo e(route('post.detail', ['id' => $post->id])); ?>">view more</a>
                                </td>
                                <td><?php echo e(Carbon\Carbon::parse($post->created_at)->format('d-m-Y')); ?></td>
                                <td>
                                    <a href="<?php echo e(route('post.edit', ['id' => $post->id])); ?>">
                                        <button type="button" class="btn btn-primary btn-sm">Edit Post</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('post.delete', ['id' => $post->id])); ?>">
                                        <button type="button" class="btn btn-danger btn-sm">Delete Post</button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <p class="text-center text-primary">No Posts created Yet!</p>
                    <?php endif; ?>
                </table><Br>
            </main>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\muvaecommerce\resources\views/home.blade.php ENDPATH**/ ?>