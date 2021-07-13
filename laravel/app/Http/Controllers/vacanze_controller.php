<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacanze;

class vacanze_controller extends Controller
{
    public function index() {
        $trip=Vacanze::all();
        ddd($trip);
        return view('vacanze.index', compact('trip'));
    }
}