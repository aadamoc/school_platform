 
<?php $__env->startSection('title', 'Project Details'); ?> 
<?php $__env->startSection('content'); ?> 
 <h1><?php echo e($project->name); ?></h1>
 <p><strong>Description:</strong> <?php echo e($project->description); ?></p>
 <p><strong>Deadline:</strong> <?php echo e($project->deadline); ?></p>
 <p><strong>User:</strong> <?php echo e($project->user->name); ?></p>
 <a href="<?php echo e(route('projects.index')); ?>" class="btn btn-secondary">Back to List</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\M12\school_platform\resources\views/projects/show.blade.php ENDPATH**/ ?>