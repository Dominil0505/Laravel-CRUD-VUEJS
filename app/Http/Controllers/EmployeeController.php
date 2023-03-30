<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::all();
        return response()->json($employee);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employees = new Employee([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'mobile' => $request->input('mobile')
        ]);

        $employees->save();
        return response()->json('Employe created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employees = Employee::find($id);
        return response()->json($employees);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * update all data in employee record with api call
     */
    public function update(Request $request, string $id)
    {
        $employees = Employee::find($id);
        $employees->update($request->all);
        return response()->json('Employee updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::destroy($id);
        return response()->json('Employee deleted');
    }
}
