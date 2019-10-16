<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeModel;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = EmployeeModel::all();
        

        return view('page.employeeIndex', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.employeeCreate');
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
            "name" => "required",
            "lastname" => "required",
            "birthday" => "required",
            "jobtitle" => "required",
            "salary" => "required"
          ]);
          $employee = EmployeeModel::create($validatedData);
        
          return redirect('/employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = EmployeeModel::findOrFail($id);
        return view('page.employeeEdit', compact('employee'));
        // return 'incoming id ' . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            "name" => "required",
            "lastname" => "required",
            "birthday" => "required",
            "jobtitle" => "required",
            "salary" => "required"
          ]);
          EmployeeModel::whereId($id) -> update($validatedData);
        
          return redirect('/employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = EmployeeModel::findOrFail($id);
        $employee -> delete();

        return redirect('/employees');
    }
}
