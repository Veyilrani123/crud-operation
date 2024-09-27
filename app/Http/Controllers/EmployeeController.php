<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AddEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employee = User::where('role', 'employee')->latest()->paginate(5);
        
        return view('employee.index', compact('employee'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function list()
    {
        $employee = User::where('role', 'employee')->latest()->paginate(5);
        
        return view('employee.list', compact('employee'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(AddEmployeeRequest $request)
    {   
        // Modify the request data before storing
        $validatedData = $request->validated();
    
        // Convert 'dob' and 'doj' to 'Y-m-d' format
        $validatedData['dob'] = Carbon::createFromFormat('d-m-Y', $request->input('dob'))->format('Y-m-d');
        $validatedData['doj'] = Carbon::createFromFormat('d-m-Y', $request->input('doj'))->format('Y-m-d');
    
        // Store the data in the database
        User::create($validatedData);
        
    
        return redirect()->route('employee.index')
                         ->with('success', 'Employee created successfully.');
    }
    

    public function edit(User $employee)
    {
        return view('employee.edit',compact('employee'));
    }

    public function update(UpdateEmployeeRequest $request, User $employee)
    {
        $validatedData = $request->validated();
    
        // Convert 'dob' and 'doj' to 'Y-m-d' format
        $validatedData['dob'] = Carbon::createFromFormat('d-m-Y', $request->input('dob'))->format('Y-m-d');
        $validatedData['doj'] = Carbon::createFromFormat('d-m-Y', $request->input('doj'))->format('Y-m-d');
    
        // Store the data in the database
        //User::update($validatedData);
        $employee->update($validatedData);
        
        return redirect()->route('employee.index')
                        ->with('success','Employee updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $employee)
    {
        $employee->delete();
         
        return redirect()->route('employee.index')
                        ->with('success','Employee deleted successfully');
    }

    public function show(User $employee)
    {
        return view('employee.show',compact('employee'));
    }
}
