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

    public function employeeEdit($id) {
        $employee = Employee::findOrFail($id);
        $tasks = Task::all();
        return view('pages.employee-edit', compact('employee', 'tasks'));
    }

    public function employeeUpdate(Request $request, $id) {
        $data = $request->all();
        $employee = Employee::findOrFail($id);
        $employee->update($data);
        $tasks = Task::find($data['tasks']);
        $employee->tasks()->sync($tasks);
        return redirect()->route('index');
    }

    public function employeeDelete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->tasks()->detach();
        $employee->delete();
        return redirect()->route('index');
    }
}