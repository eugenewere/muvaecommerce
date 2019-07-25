<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
    <a class="navbar-brand" href="#">Henry-Lab</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">

                <a class="nav-link dropdown-toggle"  id="dropdown09" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">User Account</a>
                <div class="dropdown-menu" aria-labelledby="dropdown09">
                    <?php if(auth()->guard()->guest()): ?>
                    <a class="dropdown-item" href="<?php echo e(route('register')); ?>">Sign up</a>
                    <a class="dropdown-item" href="<?php echo e(route('login')); ?>">Sign in</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    <?php endif; ?>
                </div>
            </li>
        </ul>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\muvaecommerce\resources\views/partials/header.blade.php ENDPATH**/ ?>