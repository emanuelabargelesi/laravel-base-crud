@extends('layout.main-layout')
@section('content')

<a href="{{ route('employee.index') }}">BACK</a>
  <div class="update">
    <form method="post" action="{{ route('employee.update', $employee -> id) }}">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="name">Name</label>
      <input type="text" name="name" value="{{ $employee -> name }}">
      </div>
      <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" value="{{ $employee -> lastname }}">
      </div>
      <div class="form-group">
        <label for="birthday">Birthday</label>
        <input type="text" name="birthday" value="{{ $employee -> birthday }}">
      </div>
      <div class="form-group">
        <label for="jobtitle">Jobtitle</label>
        <input type="text" name="jobtitle" value="{{ $employee -> jobtitle }}">
      </div>
      <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" name="salary" value="{{ $employee -> salary }}">
          </div>
      <button type="submit">Save</button>
    </form>
  </div>

  @endsection