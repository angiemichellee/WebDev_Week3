<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelecturerRequest;
use App\Http\Requests\UpdatelecturerRequest;
use App\Models\lecturer;

class LecturerController extends Controller
{
    public function lecturer(){
            return view('lecturer', ['title' => "Lecturer's List",
            'listLecturer' => Lecturer::all()]);
    }
}
