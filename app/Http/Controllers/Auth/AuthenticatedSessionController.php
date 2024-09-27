<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        $request->authenticate();
        $request->session()->regenerate();

        // Role-based redirection
        if (Auth::user()->role == 'admin') {
            return redirect()->route('employee.index');
        } elseif (Auth::user()->role == 'manager') {
            return redirect()->route('employee.list');
        } else {
            return redirect()->route('home'); // Default redirect
        }
    }
}
