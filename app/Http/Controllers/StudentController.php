<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
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




    public function loginView()
    {
        return view('pages.login');
    }

    public function registerView()
    {
        return view('pages.register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $email = $request->email;
        $password = $request->password;

        $findUser = User::where('email', $email)->where('password', $password)->first();
        if ($findUser) {
            return response()->json($findUser);
        } else {
            return response()->json(['message' => 'User not found']);
        }
    }

}
