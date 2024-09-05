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
    <!-- Add other fields accordingly -->
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
