@extends('layouts.app')

@section('page-title', 'Add New Student')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 mb-3">Add New Student</h1>
                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Student Name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Student Lastname">
                    </div>
                    <div class="form-group">
                        <label for="matriculation_number">Matriculation Number</label>
                        <input type="text" name="matriculation_number" class="form-control" id="matriculation_number" placeholder="Matriculation Number">
                    </div>
                    <div class="form-group">
                        <label for="email_address">Email Address</label>
                        <input type="text" name="email_address" class="form-control" id="email_address" placeholder="Email Address">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection