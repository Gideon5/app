<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Car extends Model
{

    protected $fillable = [
        'car_name', 'car_model', 'car_color','car_description', 
    ];
    use HasFactory;

    protected $primaryKey = 'car_id';



    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
