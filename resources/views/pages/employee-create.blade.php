@extends('layouts.base')

@section('content')

  <h1>EMPLOYEE CREATE</h1>
  <form action="{{ route('employee.store') }}" method="post">
    @csrf
    @method('POST')
    <label for="firstname">FIRST NAME:</label>
    <input type="text" name="firstname"><br>
    <label for="lastname">LAST NAME:</label>
    <input type="text" name="lastname"><br>
    @foreach ($tasks as $task)
      <input type="checkbox" name="tasks[]" value="{{ $task->id }}" class="checkbox"> {{ $task->title }}
    @endforeach
    <br><br>
    <input class="create-button" type="submit" value="CREATE">
  </form>

@endsection