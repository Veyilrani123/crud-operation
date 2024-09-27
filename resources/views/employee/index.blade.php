@extends('employee.layouts')
  
@section('content')

<div class="card mt-5 col-10 mx-auto">
  <h2 class="card-header">Employee List</h2>
  <div class="card-body p-0">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end p-2 my-2">
        <a class="btn" href="{{ route('employee.create') }}" style="background: #f2f2f2;">Add</a>
    </div>
    <table class="table table-striped my-0" style="text-align: center;vertical-align: middle;border-top: 1px solid #f2f2f2;">
        <thead>
            <tr style="text-align: center;vertical-align: middle;">
                <th width="80px" height="60ox">No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Employee ID</th>
                <th>DOB</th>
                <th>Date of joining</th>
                <th width="250px">Action</th>
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
                <td>
                    <form action="{{ route('employee.destroy',$item->id) }}" method="POST" class="my-0">
        
                        <a class="btn" href="{{ route('employee.show',$item->id) }}"><i class="fa-solid fa-eye"></i></a>
        
                        <a class="btn" href="{{ route('employee.edit',$item->id) }}"><i class="fa-solid fa-pencil"></i></a>
        
                        @csrf
                        @method('DELETE')
            
                        <button type="submit" class="btn"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
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