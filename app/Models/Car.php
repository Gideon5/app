<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $fillable = [
        'car_name', 'car_model', 'car_color','car_description', 
    ];
    use HasFactory;
}
