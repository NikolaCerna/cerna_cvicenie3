<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function showForm()
    {
        return view('example.form');
    }
    public function processForm(Request $request)
    {
        $data = $request->input('number');

        $a = [];
        $a[0] = $data;
        $a[1] = $data+1;

        for ($i=2; $i<10; $i++) {
            $a[$i] = $a[$i-1] + $a[$i-2];
        }


        return view('example.show', compact('a') );
    }
}
