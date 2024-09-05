<form action="{{ route('employee.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required>
    </div>
    <div>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
    </div>
    <div>
        <label for="hired_date">Hired Date:</label>
        <input type="date" id="hired_date" name="hired_date" required>
    </div>
    <div>
        <label for="salary">Salary:</label>
        <input type="number" step="0.01" id="salary" name="salary" required>
    </div>
    <div>
        <label for="division">Division:</label>
        <select id="division" name="division" required>
            <option value="IT">IT</option>
            <option value="HR">HR</option>
            <option value="Finance">Finance</option>
            <!-- Add more divisions as needed -->
        </select>
    </div>
    <button type="submit">Submit</button>
</form>
