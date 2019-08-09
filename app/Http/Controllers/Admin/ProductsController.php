<?php

namespace App\Http\Controllers\Admin;

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
         $prod->image=$request->image;
         $prod->price=$request->price;
                 $prod->save();
         return redirect('/admin/products');
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
        $produ->image=$request->image;
        $produ->price=$request->price;
         if($produ->save()){
            echo "<script>alert('added successfully')</script>";
        }
        else{
            echo "<script>alert('not added')</script>";
        }
        
        return redirect('/admin/products');
	}
	
    public function GetProductsDetail(Request $request,$id){
        $proArray=Product::find($id);
        echo $proArray->category_id;
        echo $proArray->products_name;
        echo $proArray->products_weight;
        echo $proArray->image;
        echo $proArray->price;
    }

    public function delete($id){
        $ret = Product::findOrFail($id)->delete();
        return redirect('/admin/products');
    }

    public function uploadfile(Request $request){
        $file=$request->file("product_pic");
        $file->move('uploads',$file->getClientOriginalName());

    }
    public function getAllImages(){ //image read gareyko

        $images= \File::files("uploads"); //files upload gareyko
        foreach ($images as $image) {
            $info =pathinfo($image); 
            //echo $info['basename'];//basename ley file ko name linxa
            //mathi ko ley image ko name matra deytauxa output ma 
            echo "<img src='/uploads/".$info['basename']."'/>";
        }
    }

   
}