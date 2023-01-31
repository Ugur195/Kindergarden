<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = [
        'name',
    ];
    use HasFactory;
    public function districts(){
        return $this->hasMany(App\Models\Kindergarden::class,'district_id');
    }
}
