
<table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Address</th>
        <th>Hired Date</th>
        <th>Salary</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($employees as $employee)
        <tr>
          <td>{{ $employee->name }}</td>
          <td>{{ $employee->dob }}</td>
          <td>{{ $employee->email }}</td>
          <td>{{ $employee->phone_number }}</td>
          <td>{{ $employee->address }}</td>
          <td>{{ $employee->hired_date }}</td>
          <td>{{ $employee->salary }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  