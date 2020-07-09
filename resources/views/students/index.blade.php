@extends('layouts.app')

@section('page-title', 'Student list')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mt-3 mb-3">Student List</h1>
                    <a class="btn btn-primary"
                    href="{{ route('students.create') }}">
                        New Student
                    </a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Matriculation Number</th>
                            <th>Email Address</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->lastname }}</td>
                                <td>{{ $student->matriculation_number }}</td>
                                <td>{{ $student->email_address }}</td>
                                <td class="text-right">
                                    <a class="btn btn-info btn-sm"
                                    href="{{ route('students.show', ['student' => $student->id]) }}">
                                        Details
                                    </a>
                                    <a class="btn btn-warning btn-sm" href="#">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="#">Delete</a>
                                </td>
                            </tr>
                        @empty
                            <tr colspan="4">
                                <td>Student list is empty</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection