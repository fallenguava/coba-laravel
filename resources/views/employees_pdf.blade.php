<!DOCTYPE html>
<html>
<head>
    <title>Employees</title>
</head>
<body>
    <h1>Employees List</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone_number }}</td>
                <td>{{ $employee->salary }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
