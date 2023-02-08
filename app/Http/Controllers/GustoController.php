<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GustoController extends Controller
{
    public function index(){
        return view("gustos.index");
    }

    public function show($gusto){
        return view('gustos.show',compact('gusto'));
    }

    public function create(){
        return view('gustos.index');
    }

}
