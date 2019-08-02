<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductsController extends Controller
{
     public function Create(){
		return review('create');
	}
	public function Save(Request $request){
		echo $request->get('category_id');
		echo $request->get('products_name');
	}
	
    public function read(){
    	//model name 
    	$prod=product::find(1);
    	//view file
    	return view("product");
    }
}
