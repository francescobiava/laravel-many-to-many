@extends('layouts.base')

@section('content')
  
  <h1>EMPLOYEES:</h1>
  <ul>
    @foreach ($employees as $employee)
      <li class="employee">
        <h3>{{ $employee->firstname }} {{ $employee->lastname }} <a href="{{ route('employee.delete', $employee->id) }}" class="button">DELETE</a></h3>
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