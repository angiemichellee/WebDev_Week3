<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

private static $data = [
                            ['project' => 'Web',
                            'course' => 'Web Development',
                            'lecturer' => 'Bu Laura'],

                            ['project' => 'Web',
                            'course' => 'Web Development',
                            'lecturer' => 'Bu Laura'],

                            ['project' => 'Web',
                            'course' => 'Web Development',
                            'lecturer' => 'Bu Laura']
    ];

    public static function studentData() {
        return self::$data;
    }

    protected $fillable = ['project', 'course', 'lecturer'];
}
