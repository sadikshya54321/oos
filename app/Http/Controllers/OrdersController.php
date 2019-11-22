<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\SaleItem;
use App\Sale;

use Stripe\Stripe;
use Stripe\Charge;
use App\Cake;
use Auth;

class OrdersController extends Controller
{
    public function orderlist(){
    	$sales = SaleItem::where('customer_id');
        $customorder = Cake::where('customer_id', '=', Auth::User()->id)->get();
    	return view("customer-pages.orderlist", compact('customorder'));
    }

    public function emptyCart(Request $request){
    	$request->session()->forget('cart-item');
    	return redirect('/orders/cart');
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

    public function checkout(Request $request){
        $products = $request->session()->get('cart-item');
        $total = 0;
        foreach($products as $product) {
            $total += $product['price'];
        }
        $sale = new Sale;
        $sale->customer_id = Auth::User()->id;
        $sale->amount = $total;
        $request->session()->put('cart-item', null);

        if ($sale->save()) {
            foreach ($products as $pro) { 
                $si = new SaleItem;
                $si->sales_id = $sale->id;
                $si->product_id = $pro['id'];
                $si->qty = 1;
                $si->save();
            }

        } else {
            echo "Something went wrong...";
        }
            echo "Your order placed successfully.." . "<br/>";
            echo "<a href='/'>Back to Main Page</a>";

    }
    
}
