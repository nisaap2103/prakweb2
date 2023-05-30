<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index(){
        return view('input');
    }

    public function output(Request $request){
        $data = [
            'nama' => $request->input('username'),
            'password' => $request->input('password'),
            'email' => $request->input('email'),
        ];
        return view('output', compact('data'));
    }
}

