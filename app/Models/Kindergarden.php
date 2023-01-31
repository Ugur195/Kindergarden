<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kindergarden extends Model
{
    protected $fillable = [
        'name',
        'image',
        'location',
        'mobile',
        'phone',
        'email',
        'language_id',
        'district_id',
        'description'

    ];
    use HasFactory;
    public function district(){
        return $this->belongsTo(\App\Models\District::class,'district_id');
    }
    public function language(){
        return $this->belongsTo(\App\Models\Language::class,'language_id');
    }
}
