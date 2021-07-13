<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vacanze_controller extends Controller
{
    public function index() {
        return view('vacanze.index');
    }
}