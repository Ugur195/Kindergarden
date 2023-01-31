<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'surname',
        'father_name',
        'phone1',
        'phone2',
        'email',
        'gender',
        'age',
        'education',
        'experience',
        'about'
    ];
    protected $table = 'cv';
}
