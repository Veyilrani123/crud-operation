@extends('employee.layouts')
  
@section('content')

<div class="card mt-5">
  <h2 class="card-header">Add New Employee</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn" href="{{ route('employee.index') }}" style="background: #f2f2f2;"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('employee.store') }}" method="POST">
        @csrf

        <div class="mb-3 form-group">
            <label for="inputName" class="form-label"><strong>Name:</strong></label>
            <input 
                type="text" 
                name="name" 
                class="form-control @error('name') is-invalid @enderror" 
                id="inputName" 
                placeholder="Name" autocomplete="off">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 form-group">
            <label for="inputEmail" class="form-label"><strong>Email:</strong></label>
            <input 
                type="text" 
                name="email" 
                class="form-control @error('email') is-invalid @enderror" 
                id="inputEmail" 
                placeholder="Email" autocomplete="off">
            @error('email')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 form-group">
            <label for="inputDOB" class="form-label"><strong>Date of birth:</strong></label>
            <input 
                type="text" 
                name="dob" 
                class="form-control @error('dob') is-invalid @enderror" 
                id="inputDOB" 
                placeholder="Date of birth" autocomplete="off">
            @error('dob')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 form-group">
            <label for="inputDOJ" class="form-label"><strong>Date of joining:</strong></label>
            <input 
                type="text" 
                name="doj" 
                class="form-control @error('doj') is-invalid @enderror" 
                id="inputDOJ" 
                placeholder="Date of joining" autocomplete="off">
            @error('doj')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
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
@endsection