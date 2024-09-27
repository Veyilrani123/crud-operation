@extends('employee.layouts')
  
@section('content')

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
        @forelse ($employee as $item)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->employee_id }}</td>
                <td>{{ $item->dob }}</td>
                <td>{{ $item->doj }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">There are no data.</td>
            </tr>
        @endforelse
        </tbody>

    </table>
  </div>
</div>