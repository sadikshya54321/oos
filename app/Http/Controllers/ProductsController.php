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
        $prod =Product::find($id);
        return view('products.edit', compact('prod'));
    }

    public function update(Request $request, $id){
        $prod = Product::find($id);
         $prod->category_id=$request->category_id;
         $prod->products_name=$request->products_name;
         $prod->products_size=$request->products_size;
         $prod->price=$request->price;
                 $prod->save();
         return redirect('/products');
    }

    public function GetProducts(){
        $proArray=Product::all();
        return view('products.edit', compact('proArray'));
    }

	public function Save(Request $request){
        $produ=new Product();
        $produ->category_id=$request->category_id;
        $produ->products_name=$request->products_name;
        $produ->products_size=$request->products_size;
        $produ->price=$request->price;
         if($produ->save()){
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

    public function delete($id){
        $ret = Product::findOrFail($id)->delete();
        return redirect('/products');
    }

   
}
