<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cake;
use Auth;

class CakesController extends Controller     
{
    public function __construct()
    {
        $this->middleware('auth');
    }
        

    public function Save(Request $request){

        $order = new Cake();
        $obj = Auth::User();
        if($request->base == null) {
            return redirect('/custom-order');
        }
        $order->customer_id = $obj->id;
        $order->base=$request->base;
        $order->flavour=$request->flavour;
        $order->toppings=$request->toppings;
         $order->egg=$request->type;
        $order->sugar=$request->sugar;

        if ($order->save()) {
            echo "<script>alert('added successfully')</script>";
        } else {   
            echo "<script>alert('not added')</script>";
        }
        return redirect('/home');
    }
}

   