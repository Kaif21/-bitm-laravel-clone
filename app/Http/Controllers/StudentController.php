<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $students,$student;
    public function index()
    {
        $this->students = Student::all();
        return view('student.index',['students'=>$this->students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        Student::newStudent($request);
        return back()->with('message',"Added new student");
    }

    public function edit($id)
    {
        $this->student = Student::find($id);
        return view('student.edit',['student'=>$this->student]);
    }
    public function update(Request $request,$id)
    {
        Student::updateStudent($request,$id);
        return redirect('/student')->with('message','Updated the student info');
    }
    public function destroy($id)
    {
        Student::deleteStudent($id);
        return redirect('/student')->with('message','Updated the student info');
    }



}
