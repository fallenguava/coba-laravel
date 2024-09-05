@extends('layouts.main')

@section('container')
<h1>Edit Employee</h1>

<form action="{{ route('employee.update', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Include all input fields similar to your create form, pre-filled with $employee data -->
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" class="form-control" id="dob" name="dob" value="{{ $employee->dob }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
    </div>
    <div class="form-group">
        <label for="phone_number">Phone Number:</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $employee->phone_number }}" required>
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $employee->address }}" required>
    </div>
    <div class="form-group">
        <label for="hired_date">Hired Date:</label>
        <input type="date" class="form-control" id="hired_date" name="hired_date" value="{{ $employee->hired_date }}" required>
    </div>
    <div class="form-group">
        <label for="salary">Salary:</label>
        <input type="number" step="0.01" class="form-control" id="salary" name="salary" value="{{ $employee->salary }}" required>
    </div>
    
    <!-- Add other fields accordingly -->
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
