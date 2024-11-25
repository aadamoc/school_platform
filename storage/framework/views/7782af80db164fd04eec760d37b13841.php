 
<?php $__env->startSection('title', 'Create Project'); ?> 
<?php $__env->startSection('content'); ?> 
<h1>Create a New Project</h1>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<form action="<?php echo e(route('projects.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description"><?php echo e(old('description')); ?></textarea>
    </div>
    <div class="mb-3">
        <label for="deadline" class="form-label">Deadline</label>
        <input type="date" class="form-control" id="deadline" name="deadline" value="<?php echo e(old('deadline')); ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\M12\school_platform\resources\views/projects/create.blade.php ENDPATH**/ ?>