
  
<?php $__env->startSection('content'); ?>

<div class="card mt-5">
  <h2 class="card-header">Add New Employee</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn" href="<?php echo e(route('employee.index')); ?>" style="background: #f2f2f2;"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="<?php echo e(route('employee.update',$employee->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3 form-group">
            <label for="inputName" class="form-label"><strong>Name:</strong></label>
            <input 
                type="text" 
                name="name" 
                value="<?php echo e($employee->name); ?>"
                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                id="inputName" 
                placeholder="Name" autocomplete="off">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="form-text text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3 form-group">
            <label for="inputEmail" class="form-label"><strong>Email:</strong></label>
            <input 
                type="text" 
                name="email" 
                value="<?php echo e($employee->email); ?>"
                class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                id="inputEmail" 
                placeholder="Email" autocomplete="off">
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="form-text text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3 form-group">
            <label for="inputDOB" class="form-label"><strong>Date of birth:</strong></label>
            <input 
                type="text" 
                name="dob" 
                value="<?php echo e($employee->dob); ?>"
                class="form-control <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                id="inputDOB" 
                placeholder="Date of birth" autocomplete="off">
            <?php $__errorArgs = ['dob'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="form-text text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-3 form-group">
            <label for="inputDOJ" class="form-label"><strong>Date of joining:</strong></label>
            <input 
                type="text" 
                name="doj" 
                value="<?php echo e($employee->doj); ?>"
                class="form-control <?php $__errorArgs = ['doj'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                id="inputDOJ" 
                placeholder="Date of joining" autocomplete="off">
            <?php $__errorArgs = ['doj'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="form-text text-danger"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <button type="submit" class="btn" style="background: #f2f2f2;"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
    </form>

  </div>
</div>

    <!-- jQuery (required for the date picker) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- jQuery UI for Datepicker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script>
        $(function() {
            // Initialize the jQuery UI Datepicker
            $('#inputDOB').datepicker({
                dateFormat: 'dd-mm-yy', // Format: YYYY-MM-DD
                changeMonth: true, 
                changeYear: true,
                defaultDate: new Date(),
                maxDate: new Date() // Disable future dates
            });
            $('#inputDOJ').datepicker({
                dateFormat: 'dd-mm-yy', // Format: YYYY-MM-DD
                changeMonth: true, 
                changeYear: true,
                defaultDate: new Date(),
                maxDate: new Date() // Disable future dates
            });


        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('employee.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\technical-task\resources\views/employee/edit.blade.php ENDPATH**/ ?>