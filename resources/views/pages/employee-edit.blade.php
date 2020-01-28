@extends('layouts.base')

@section('content')

  <h1>EMPLOYEE EDIT</h1>
  <form action="{{ route('employee.update', $employee->id) }}" method="post">
    @csrf
    @method('POST')
    <label for="firstname">FIRST NAME:</label>
    <input type="text" name="firstname" value="{{ $employee->firstname }}"><br>
    <label for="lastname">LAST NAME:</label>
    <input type="text" name="lastname" value="{{ $employee->lastname }}"><br>
    @foreach ($tasks as $task)
      <input type="checkbox" name="tasks[]" value="{{ $task->id }}" class="checkbox"
        @if ($employee->tasks()->find($task->id))
          checked
        @endif
      > {{ $task->title }}
    @endforeach
    <br><br>
    <input class="edit-button" type="submit" value="UPDATE">
  </form>

@endsection