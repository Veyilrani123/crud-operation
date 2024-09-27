
  
<?php $__env->startSection('content'); ?>

<div class="card mt-5">
  <h2 class="card-header">Show Employee Detail</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn" href="<?php echo e(route('employee.index')); ?>" style="background: #f2f2f2;"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong> <br/>
                <?php echo e($employee->name); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Email:</strong> <br/>
                <?php echo e($employee->email); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Employee ID:</strong> <br/>
                <?php echo e($employee->employee_id); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>DOB:</strong> <br/>
                <?php echo e($employee->dob); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Date of joining:</strong> <br/>
                <?php echo e($employee->doj); ?>

            </div>
        </div>
    </div>

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('employee.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\technical-task\resources\views/employee/show.blade.php ENDPATH**/ ?>