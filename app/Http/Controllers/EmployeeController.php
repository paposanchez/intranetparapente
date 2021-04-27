<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emplo = employee::latest()->paginate(5);
        return view('employee.index', compact('emplo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'          => 'required|max:255',
            'lastname'      => 'required',
            'rut'           => 'required',
            'email'         => 'required'
        ]);

        $employe = new employee();
        $employe->name       = $request->name;
        $employe->lastname   = $request->lastname;
        $employe->rut        = $request->rut;
        $employe->email      = $request->email;
        $employe->save();
        
        return redirect('employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee, $id)
    {
        $employee = employee::findOrFail($id);
        return  view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        $validatedData = $request->validate([
            'name'          => 'required|max:255',
            'lastname'      => 'required',
            'rut'           => 'required',
            'email'         => 'required'
        ]);
        $employe = employee::find($id);
        $employe->name       = $request->name;
        $employe->lastname   = $request->lastname;
        $employe->rut        = $request->rut;
        $employe->email      = $request->email;
        $employe->save();
        return redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        //
    }
}
