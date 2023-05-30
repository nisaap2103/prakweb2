<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }

    public function form(Request $request)
    {
        $data = [
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'lokasi' => $request->input('lokasi'),
            'jeniskelamin' => $request->input('jk'),
            'skill' => $request->input('skill'),
        ];
        return view('form', compact('data'));
    }

}
