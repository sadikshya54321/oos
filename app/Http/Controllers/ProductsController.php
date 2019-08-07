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
         $prod->products_weight=$request->products_weight;
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
        $produ->products_weight=$request->products_weight;
        $produ->price=$request->price;
         if($produ->save()){
            echo "<script>alert('added successfully')</script>";
        }
        else{
            echo "<script>alert('not added')</script>";
        }
        
        return redirect("products");
	}
	
    public function GetProductsDetail(Request $request,$id){
        $proArray=Product::find($id);
        echo $proArray->category_id;
        echo $proArray->products_name;
        echo $proArray->products_weight;
        echo $proArray->price;
    }

    public function delete($id){
        $ret = Product::findOrFail($id)->delete();
        return redirect('/products');
    }

   
}
