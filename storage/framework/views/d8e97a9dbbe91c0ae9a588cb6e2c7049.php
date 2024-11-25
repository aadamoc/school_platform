<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'School Platform'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min
.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('projects.index')); ?>">School Platform</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('projects.index')); ?>">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('projects.create')); ?>">Create Project</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundl
e.min.js"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\school_platform\resources\views/layouts/layout.blade.php ENDPATH**/ ?>