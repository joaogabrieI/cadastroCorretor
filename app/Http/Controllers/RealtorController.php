<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealtorController extends Controller
{
    public function index(){
        return view('realtors.index');
    }
}
