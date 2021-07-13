<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacanze;

class vacanze_controller extends Controller
{
    public function index() {
        $vacanze=Vacanze::all();
        // ddd($vacanze);
        return view('vacanze.index', compact('vacanze'));
    }
}