@extends('layout.main-layout')
@section('content')



<a href="{{ route('employee.create') }}">Create new employee</a>

    <div class="box-cont">
        @foreach ($employees as $employee)
            <div class="box">
                <p> {{ $employee -> name }} <br>
                    {{ $employee -> lastname }} <br>
                    {{ $employee -> birthday }} <br>
                    {{ $employee -> jobtitle }} <br>
                    {{ $employee -> salary }}                
                </p>
                <a href="{{ route('employee.edit', $employee -> id) }}">UPDATE</a>
                <a href="{{ route('employee.destroy', $employee -> id) }}">DELETE</a>
            </div>    
        @endforeach
    </div>    

 @endsection