<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;

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
            'car_description' => 'required',
            'image' => ['required', 'image'] ,
            
   
   
         ]);
    

     $car = new Car;
     $car->car_name = $request->car_name;
     $car->car_model = $request->car_model;
     $car->car_color = $request->car_color;
     $car->car_description = $request->car_description;
     $car->user_id = Auth::id();
     

     if($request->hasfile('image'))
     {
         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'. $extension;
         $file->move('uploads/cars/', $filename);
         $car->image = $filename;
     }
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



public function details() {

    $cars = Car::with(['user'])->get();
    $users = User::with(['cars'])->get();

    dd($cars[1]->user());

      return view('cars.cars', compact('cars', 'users'));
     }


}

