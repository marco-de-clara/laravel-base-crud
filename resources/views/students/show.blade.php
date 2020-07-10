@extends('layouts.app')

@section('page-title', 'Student Details')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 mb-3">Student Details</h1>
                <ul>
                    <li>ID: {{ $student->id }}</li>
                    <li>Name: {{ $student->name }}</li>
                    <li>Lastname: {{ $student->lastname }}</li>
                    <li>Matriculation Number: {{ $student->matriculation_number }}</li>
                    <li>Email Address: {{ $student->email_address }}</li>
                </ul>

                <form action="{{ route('students.destroy', ['student' => $student->id]) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                </form>
            </div>
        </div>
    </div>
@endsection