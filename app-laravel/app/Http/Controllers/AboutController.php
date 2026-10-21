<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class aboutController extends Controller
{
    public function about(){
        return view('about', [
            'judul' => "My Project", 
            'project' => About::allData()]);
    }
}
