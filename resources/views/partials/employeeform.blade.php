<form action="{{ route('employee.store') }}" method="POST" class="p-4">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" class="form-control" id="dob" name="dob" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="phone_number">Phone Number:</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="address" required>
    </div>
    <div class="form-group">
        <label for="hired_date">Hired Date:</label>
        <input type="date" class="form-control" id="hired_date" name="hired_date" required>
    </div>
    <div class="form-group">
        <label for="salary">Salary:</label>
        <input type="number" step="0.01" class="form-control" id="salary" name="salary" required>
    </div>
    <div class="form-group">
        <label for="division">Division:</label>
        <select class="form-control" id="division" name="division" required>
            <option value="IT">IT</option>
            <option value="HR">HR</option>
            <option value="Finance">Finance</option>
            <!-- Add more divisions as needed -->
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
