<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User2 extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone',
        'password',
        'Fin'
    ];
    protected $table = 'users2';
}
