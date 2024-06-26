<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('pages.form');
    }

    public function create(Request $req)
    {
        $data = $req->all();
        $people = new People();

        $people->city = $data['city'];
        $people->email = $data['email'];
        $people->username = $data['username'];
        $people->password = md5($data['password']);

        $people->save();
        return redirect()->route('form.data.view');
    }

    public function distroy($id)
    {
        $people = People::find($id);
        if (!is_null($people)) {
            $people->delete();
        }
        return redirect()->route('form.data.view');
    }

    public function view()
    {
        $peoples = People::all();
        $data = compact('peoples');
        return view('pages.peoples')->with($data);
    }
}
