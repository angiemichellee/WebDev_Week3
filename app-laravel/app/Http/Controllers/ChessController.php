<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chessController extends Controller
{
    public function chess() {
            return view('chess', ['title' => "Blade Checkerboard"]); 
    }
}
