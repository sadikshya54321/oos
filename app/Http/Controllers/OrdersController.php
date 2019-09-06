<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

use Stripe\Stripe;
use Stripe\Charge;

class OrdersController extends Controller
{
    public function orderlist(){
    	return view("customer-pages.orderlist");
    }

    public function emptyCart(Request $request){
    	$request->session()->forget('cart-item');
    	echo "deleted";
    }

    public function removeItem(Request $request, $id){
    	$products = $request->session()->get('cart-item');
    	$newList = [];
    	foreach($products as $prod){
    		if ($prod['id'] !=$id){
    			$newList[] = $prod;
    		}
    	}
    	$request->session()->put('cart-item', $newList);
    	return redirect('/orders/cart');
    }

    public function addToCart(Request $request, $id){
    	$products=$request->session()->get('cart-item');
    	$productObj= Product::find($id);
    	$products[]=array('id' => $id, 'name' => $productObj->product_name, 'image' => $productObj->image, 'price' => $productObj->price);
    	$request->session()->put('cart-item', $products);
    	$request->session()->put('order-placed-msg',1);
    	return redirect("/");
    }

    public function cart(Request $request){

    	$products=$request->session()->get('cart-item');
    	return  view('customer-pages.cart', compact('products'));
    }

    
}
