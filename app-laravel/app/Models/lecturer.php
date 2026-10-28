<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
    /** @use HasFactory<\Database\Factories\LecturerFactory> */
    use HasFactory;
    protected $fillable = ['name', 'course', 'age', 'gender'];
}
