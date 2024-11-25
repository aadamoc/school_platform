 
<?php $__env->startSection('title', 'Projects List'); ?> 
<?php $__env->startSection('content'); ?> 
<h1>Projects List</h1>
<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
<a href="<?php echo e(route('projects.create')); ?>" class="btn btn-primary mb-3">Create New Project</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Deadline</th>
            <th>User</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
                    <tr>
                        <td><?php echo e($project->name); ?></td>
                        <td><?php echo e($project->description); ?></td>
                        <td><?php echo e($project->deadline); ?></td>
                        <td><?php echo e($project->user->name); ?></td>
                        <td>
                            <a href="<?php echo e(route('projects.show', $project)); ?>" class="btn btn-info btn-sm">View</a>
                            <a href="<?php echo e(route('projects.edit', $project)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(route(
                    'projects.destroy',
                    $project
                )); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger 
            btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="5" class="text-center">No projects found.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\school_platform\resources\views\index.blade.php ENDPATH**/ ?>