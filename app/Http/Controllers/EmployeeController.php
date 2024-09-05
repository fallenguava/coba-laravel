<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller {

    public function store(Request $request)
    {
        $table = strtolower($request->input('division')) . '_employees';
    
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|unique:' . $table . ',email',
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'hired_date' => 'required|date',
            'salary' => 'required|numeric',
            'division' => 'required|string',
        ]);
    
        // Save to the appropriate table
        DB::table($table)->insert([
            'name' => $validatedData['name'],
            'dob' => $validatedData['dob'],
            'email' => $validatedData['email'],
            'phone_number' => $validatedData['phone_number'],
            'address' => $validatedData['address'],
            'hired_date' => $validatedData['hired_date'],
            'salary' => $validatedData['salary'],
        ]);
    
        return redirect()->back()->with('success', 'Employee added successfully!');
    }

    public function showEmployeeData()
    {
        $title = 'Employee Data';
        $itEmployees = DB::table('it_employees')->get();
        $hrEmployees = DB::table('hr_employees')->get();
        $financeEmployees = DB::table('finance_employees')->get();

        return view('employeedata', compact('title', 'itEmployees', 'hrEmployees', 'financeEmployees'));
    }

    public function edit($id)
    {
        // Fetch employee data
        $title = 'Employee Data';
        $employee = DB::table('it_employees')->where('id', $id)->first(); // Adjust based on division logic
        return view('edit_employee', compact('title', 'employee'));
    }

    public function destroy($id)
    {
        // Delete employee data
        DB::table('it_employees')->where('id', $id)->delete(); // Adjust based on division logic
        return redirect()->route('employee.data')->with('success', 'Employee deleted successfully!');
    }

    public function update(Request $request, $id)
    {
        $table = strtolower($request->input('division')) . '_employees'; // Adjust this logic if needed

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|unique:' . $table . ',email,' . $id,
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'hired_date' => 'required|date',
            'salary' => 'required|numeric',
        ]);

        DB::table($table)->where('id', $id)->update($validatedData);

        return redirect()->route('employee.data')->with('success', 'Employee updated successfully!');
    }

}
