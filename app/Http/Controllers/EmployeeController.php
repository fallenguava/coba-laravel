<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Routing\Controller;
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
        // Fetch employee data to determine division
        $employee = DB::table('it_employees')->where('id', $id)->first();
        if (!$employee) {
            $employee = DB::table('hr_employees')->where('id', $id)->first();
        }
        if (!$employee) {
            $employee = DB::table('finance_employees')->where('id', $id)->first();
        }

        if ($employee) {
            $title = 'Employee Data';
            return view('edit_employee', compact('title', 'employee'));
        }

        return redirect()->route('employee.data')->with('error', 'Employee not found!');
    }


    public function destroy($id)
    {
        // Attempt to delete from all division tables
        $deleted = DB::table('it_employees')->where('id', $id)->delete();
        if (!$deleted) {
            $deleted = DB::table('hr_employees')->where('id', $id)->delete();
        }
        if (!$deleted) {
            $deleted = DB::table('finance_employees')->where('id', $id)->delete();
        }

        if ($deleted) {
            return redirect()->route('employee.data')->with('success', 'Employee deleted successfully!');
        }

        return redirect()->route('employee.data')->with('error', 'Employee not found!');
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


    // public function exportPdf()
    // {
    //     $employees = DB::table('it_employees')->get(); // Adjust for all divisions

    //     $pdf = PDF::loadView('employees_pdf', compact('employees'));
    //     return $pdf->download('employees.pdf');
    // }


}
