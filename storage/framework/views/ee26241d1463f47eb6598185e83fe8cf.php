<!DOCTYPE html>
<html>
<head>
    <title>Laravel 11 CRUD Application - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body>
<a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"style="
    position: fixed;
    top: 10px;
    right: 140px;
    text-align: end;
    width: 1000px;
    margin: auto;
">
        <?php echo e(__('Logout')); ?>

    </a>
    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
<div class="container">
    
    <?php echo $__env->yieldContent('content'); ?>
</div>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\technical-task\resources\views/employee/layouts.blade.php ENDPATH**/ ?>