<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{

    public function create() {

        return view('cars.create');


    }
    

    public function store(Request $request) {
        

        $request->validate([
            'car_name' => 'required',
            'car_model' => 'required',
            'car_color' => 'required',
            'car_description' => 'required' 
   
   
         ]);
    

     $car = new Car;
     $car->car_name = $request->car_name;
     $car->car_model = $request->car_model;
     $car->car_color = $request->car_color;
     $car->description = $request->car_description;
     $car->save();
     
     

     return redirect('/cars/home');

}


public function show() {

    $cars = Car::all();

      return view('cars.home',['cars' => $cars]);
     }

}
