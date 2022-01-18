<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if (\Auth::user()->type == 'admin')
        {
            return view('adminDashboard');
        }
        else if(\Auth::user()->type == 'donor')
        {
            return view('donor_dashboard');
        }
        else if(\Auth::user()->type == 'recipient')
        {
            return view('recipient');
        }
        else if(\Auth::user()->type == 'employee')
        {
            return view('employee_dashboard');
        }
    }
    public function test()
    {
       return view('employee.add');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('login');
    }
}
