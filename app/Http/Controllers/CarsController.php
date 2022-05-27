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
     $car->car_description = $request->car_description;
     $car->save();
     
     

     return redirect('/cars/home');

}


public function show() {

    $cars = Car::all();

      return view('cars.home',['cars' => $cars]);
     }


public function edit(Car $car) {

    return view('cars.edit', ['car'  => $car]);


}


public function update(Car $car) {

   

    request()->validate([

        'car_name' => 'required',
        'car_model' => 'required',
        'car_color' => 'required',
        'car_description' => 'required'
    ]);
    


    $car->update([
        'car_name' => request('car_name'),
        'car_model' => request('car_model'),
        'car_color' => request('car_color'),
        'car_description' => request('car_description')
    ]);



    return redirect('/cars/home');
}



public function destroy(Car $car){

        
    $car->delete();

    return redirect('/cars/home');
}

}
