<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $responseData = [
            'status' => 'fail',
            'message' => '',
            'data' => null
        ];

        $validator = Validator::make($request->all(), 
        [
            'id' => 'required',
            'name' => 'requred|string',
            'course' => 'required|string',
            'year' => 'required'
        ]);

        if ($validator->fails()) {
            $responseData['message'] = $validator->error()->first();

            return response()->json($responseData, 400);
        };

        $student = Student::create([
            'id' => $request['id'],
            'name' => $request['name'],
            'course' => $request['course'],
            'year' => $request['year']
        ]);

        if ($student == null)
        {
            $responseData['message'] = 'Attendance Unsuccessful';
            return response()->json($responseData, 400);
        }

        $responseData['status'] = 'success';
        $responseData['message'] = 'Attendance Successful';

        return response()->json($responseData, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
