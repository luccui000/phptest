<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employee;
use App\User;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use App\Http\Requests\EmployeeStoreRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeStoreRequest $request)
    {
        // $validate = Validator::make($request->all(), Employee::VALIDATE_RULES);
        // if($validate->fails()) {
        //     return response()->json(['errors' => $validate->errors()]);
        // }  
        $employee = Employee::firstOrCreate(
            ['user_id' => $request->input('user_id')],
            [     
                'firstname' => $request->input('firstname'), 
                'lastname' => $request->input('lastname'), 
                'dob' => $request->input('dob'),
                'user_id' => $request->input('user_id')
            ]
        );
        return response()->json(['message' => 'Create Successfully', 'result' => $employee]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return response()->json($employee, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    { 
        $employee = $employee->update($request->input());
        return response()->json($employee, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        try {
            Employee::find($id)->delete();
        } catch(\Exception $e) {
            return response()->json(['errors' => $e->getMessage()]);
        }
        return response()->json(['message' => 'Deleted']);
    }
}
