@extends('layouts.app')

@section('page-title', 'Edit Student')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 mb-3">Edit Student</h1>
                @if ($errors->any())
                   <div class="alert alert-danger">
                       <ul>
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                   </div>
                @endif

                <form action="{{ route('students.update', ['student' => $student->id]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Student Name" value="{{ old('name', $student->name) }}">
                        @error ('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Student Lastname" value="{{ old('lastname', $student->lastname) }}">
                        @error ('lastname')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="matriculation_number">Matriculation Number</label>
                        <input type="text" name="matriculation_number" class="form-control" id="matriculation_number" placeholder="Matriculation Number" value="{{ old('matriculation_number', $student->matriculation_number) }}">
                        @error ('matriculation_number')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email_address">Email Address</label>
                        <input type="text" name="email_address" class="form-control" id="email_address" placeholder="Student Email Address" value="{{ old('email_address', $student->email_address) }}">
                        @error ('email_address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection