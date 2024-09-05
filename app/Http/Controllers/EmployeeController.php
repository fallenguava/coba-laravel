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
    

}
