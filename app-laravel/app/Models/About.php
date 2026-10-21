<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    private static $projects = ['Calculator', 'Accounting', 'Studentreport', 'POS Resto', 'Online Store', 'Pet Shop'];

    public static function allData() {
        return self::$projects;
    }

    protected $fillable = ['projects'];
}
