<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cake;
class CakesController extends Controller
{
    public function index(){
        return view('customer-pages.index');
    }

    public function Save(Request $request){
        $order=new Order();
        
        $order->base=$request->base;
        $order->flavour=$request->flavour;
        $order->toppings=$request->toppings;
         $order->egg=$request->egg;
        $order->sugar=$request->sugar;

        
         if($order->save()){
            echo "<script>alert('added successfully')</script>";
        }
        else{
            echo "<script>alert('not added')</script>";
        }
        return redirect('/cakes');
    }
}
