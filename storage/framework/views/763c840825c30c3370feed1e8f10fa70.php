
  
<?php $__env->startSection('content'); ?>

<div class="card mt-5 col-10 mx-auto">
  <h2 class="card-header">Employee List</h2>
  <div class="card-body p-0">
    <table class="table table-striped my-0" style="text-align: center;vertical-align: middle;border-top: 1px solid #f2f2f2;">
        <thead>
            <tr style="text-align: center;vertical-align: middle;">
                <th width="80px" height="60ox">No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Employee ID</th>
                <th>DOB</th>
                <th>Date of joining</th>
            </tr>
        </thead>

        <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e(++$i); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->email); ?></td>
                <td><?php echo e($item->employee_id); ?></td>
                <td><?php echo e($item->dob); ?></td>
                <td><?php echo e($item->doj); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="4">There are no data.</td>
            </tr>
        <?php endif; ?>
        </tbody>

    </table>
  </div>
</div>
<?php echo $__env->make('employee.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\technical-task\resources\views/employee/list.blade.php ENDPATH**/ ?>