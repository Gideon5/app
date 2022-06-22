<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;
use App\Models\Cart;



use Illuminate\Http\Request;

class CartController extends Controller
{
    //


    public function store(Request $request, $id) {

     $cart = new Cart;
     $cart->car_id = $request->id;
     $cart->save();

     
     
     

     return redirect('/cars/users');

}

    public function show() {

        $carts = Cart::with(['cars'])->get();
        $cars = Car::with(['carts'])->get();

        

    

      return view('cart', compact('cars', 'carts'));

        



    }




    
public function delete(Cart $cart){

        
    $cart->delete();

    return redirect('/cart');
}

}