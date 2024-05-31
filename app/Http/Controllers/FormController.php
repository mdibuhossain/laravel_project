<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('pages.form');
    }

    public function create(Request $req)
    {
        return view('pages.form')->with($req->all());
    }
}
