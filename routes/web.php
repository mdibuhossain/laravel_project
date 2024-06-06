<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get("/basic-controller", [BasicController::class, 'index']);

Route::get("/demo/{name?}/{district?}", function ($name = null, $district = null) {
    $htmlDecode = "<h1>Campus Library<h1>";
    $data = compact("name", "district", "htmlDecode");
    return view('pages.demo')->with($data);
});

Route::get("/form-create", [FormController::class, 'index'])->name('form.create.view');
Route::post("/form-create", [FormController::class, 'create'])->name('form.create');
;
Route::get('/form-data', [FormController::class, 'view'])->name('form.data.view');
Route::get('/form/delete/{id}', [FormController::class, 'distroy'])->name('form.delete');


Route::get('/student-form-create', [StudentController::class, 'index'])->name('student.form.view');


Route::get('/api/token', [StudentController::class, 'getToken']);
Route::get('/api/students', [StudentController::class, 'getStudents']);
Route::get('/api/students/{id}', [StudentController::class, 'getStudentById']);
Route::post('/api/students', [StudentController::class, 'postStudent']);
Route::delete('/api/students/{id}', [StudentController::class, 'deleteStudent']);
Route::put('/api/students/{id}', [StudentController::class, 'updateStudent']);




Route::get('/login-form', [StudentController::class, 'loginView'])->name('login.view');
Route::get('/register-form', [StudentController::class, 'registerView'])->name('register.view');
Route::post('/login', [StudentController::class, 'login'])->name('login');
Route::post('/register', [StudentController::class, 'register'])->name('register');

