@extends('layouts.base')

@section('content')
  
  <h1>EMPLOYEES:</h1>
  <a href="{{ route('employee.create') }}" class="create-button">CREATE</a>
  <ul>
    @foreach ($employees as $employee)
      <li class="employee">
        <h3>
          {{ $employee->firstname }} {{ $employee->lastname }} 
          <a href="{{ route('employee.edit', $employee->id) }}" class="edit-button">EDIT</a>
          <a href="{{ route('employee.delete', $employee->id) }}" class="delete-button">DELETE</a>
        </h3>
        <ul>
          @foreach ($employee->tasks as $task)
            <li>
              {{ $task->title }}:<br>
              {{ $task->description }}
            </li>
          @endforeach
        </ul>
      </li>
    @endforeach
  </ul>

@endsection