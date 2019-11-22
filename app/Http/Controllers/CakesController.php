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
        if($request->base == null || $request->flavour == null || $request->toppings == null || $request->type == null || $request->sugar == null) {
            return redirect('/custom-order');
        }
        $order->customer_id = $obj->id;
        $order->base=$request->base;
        $order->flavour=$request->flavour;
        $order->toppings=$request->toppings;
         $order->egg=$request->type;
        $order->sugar=$request->sugar;

        if ($order->save()) {
            echo "<script>alert('YOUR CUSTOMIZED ORDER HAS BEEN SUBMITTED SUCCESSFULLY.. We will get back to you soon!' )</script>";
        } else {   
            echo "<script>alert('Something went wrong')</script>";
        }
        return redirect('/home');
    }
}

   