<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
     public function Index(){
		$proArray=product::all();
    	return view('products.index', compact('proArray'));
	}
	public function Save(Request $request){
		echo $request->get('category_id');
		echo $request->get('products_name');
	}
	
   // public function read(){
    	//model name 
    	//$prod=product::find(1);
    	//view file
    	//return view("product");
   // }
}
