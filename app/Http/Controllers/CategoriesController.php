<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class CategoriesController extends Controller
{
    public function Index(){
    	$catArray=Category::all();
    	return view('categories.index', compact('catArray'));
	}

	public function create(){
		return view("categories.form");
	}

	public function edit($id){
        $cat =Category::find($id);
        return view('categories.edit', compact('cat'));
    }

    public function update(Request $request, $id){
        $catArray = Category::find($id);
        echo $catArray->name=$request->name;
         $catArray->save();
         return redirect('/categories');
    }

    public function GetCategoriesDetail(){
        $catArray = Category::find(1);
        echo $catArray->name;
    }
    public function GetCat(){
    	$catArray=Category::all(); 
    	return view("categories.edit",compact("catArray"));
     }

     public function save(Request $request){
    	$catArray1=new Category();
    	$catArray1->name=$request->name;
        if($catArray1->save()){
            echo "<script>alert('added successfully')</script>";
        }
        else{
            echo "<script>alert('not added')</script>";
        }
        
    	return redirect("categories");
    }

     public function delete($id){
        $ret = Category::findOrFail($id)->delete();
        return redirect('/categories');
    }

}