<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        $title = "Basic Controller";
        $data = compact('title');
        return view('pages.controller')->with($data);
    }
}
