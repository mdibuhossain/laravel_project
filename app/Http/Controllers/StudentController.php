<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('pages.studentForm');
    }

    public function getToken()
    {
        return csrf_token();
    }

    public function getStudents()
    {
        $student = Student::all();
        return response()->json($student);
    }

    public function getStudentById($id)
    {
        $student = Student::find($id);
        return response()->json($student);
    }

    public function postStudent(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->st_id = $request->st_id;
        $student->semester = $request->semester;
        $student->save();
        return response()->json($student);
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->st_id = $request->st_id;
        $student->semester = $request->semester;
        $student->save();
        return response()->json($student);
    }

    public function deleteStudent($id)
    {
        $student = Student::find($id);
        $student->delete();
        return response()->json($student);
    }

}
