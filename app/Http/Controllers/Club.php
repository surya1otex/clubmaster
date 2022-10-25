<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Club extends Controller
{
    public function index() {
        return view('club.register');
    }
}
