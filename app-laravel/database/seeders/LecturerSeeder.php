<?php

namespace Database\Seeders;

use App\Models\lecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        //  lecturer::create([
        //     'name' => "michelle hehehhehehhe",
        //     'course' => "web development",
        //     'age' => "7",
        //     'gender' => "woman"
        // ]);

        Lecturer::factory()->count(10)->create();
    }
}
