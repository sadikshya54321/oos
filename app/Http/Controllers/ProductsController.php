<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
     public function Index(){
		$proArray=Product::all();
    	return view('products.index', compact('proArray'));
	}

    public function create(){
        return view("products.form");
    }

    public function edit($id){
        $proArray =Product::find($id);
        return view('products.edit', compact('proArray'));
    }

    public function update(Request $request, $id){
        $proArray = Product::find($id);
        echo $proArray->category_id=$request->category_id;
        echo $proArray->products_name=$request->products_name;
        echo $proArray->products_size=$request->products_size;
        echo $proArray->price=$request->price;
                 $proArray->save();
         return redirect('/product/getall');
    }

    public function GetProducts(){
        $proArray=Product::all();
        return view('products.edit', compact('proArray'));
    }

	public function Save(Request $request){
        $proArray1=new Product();
        $proArray1->category_id=$request->category_id;
        $proArray1->products_name=$request->products_name;
        $proArray1->products_size=$request->products_size;
        $proArray1->price=$request->price;
         if($proArray1->save()){
            echo "<script>alert('added successfully')</script>";
        }
        else{
            echo "<script>alert('not added')</script>";
        }
        
        return redirect("products");
	}
	
    public function GetProductsDetail(){
        $proArray=Product::find(1);
        echo $proArray->category_id;
        echo $proArray->products_name;
        echo $proArray->products_size;
        echo $proArray->price;
    }
   
}
