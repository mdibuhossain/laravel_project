<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\FormController;
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

Route::get("/form-create", [FormController::class, 'index']);
Route::post("/form-create", [FormController::class, 'create']);

