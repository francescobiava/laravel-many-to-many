<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class MainController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('pages.index', compact('employees'));
    }
}
