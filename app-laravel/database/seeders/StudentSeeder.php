<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Student::create([
        //     'project' => "extra hard code",
        //     'course' => "code102",
        //     'lecturer' => "Michelle 2025'"
        // ]);

        //  Student::create([
        //     'project' => "5 menit jago coding",
        //     'course' => "code101",
        //     'lecturer' => "Michelle 2025'"
        // ]);

        // DB::table('students')-> insert([
        //     'project' => "personal web",
        //     'course' => "Web Programming",
        //     'lecturer' => "Bu Eliz"
        // ]);

        Student::factory()->count(20)->create();
    }
}
