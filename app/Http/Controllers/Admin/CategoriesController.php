<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Category;


class CategoriesController extends Controller
{
    public function Index(){
    	$catArray=Category::all();
    	return view('admin.categories.index', compact('catArray'));
	}

	public function create(){
		return view("admin.categories.form");
	}
  
	public function edit($id){
        $cat =Category::find($id);
        return view('admin.categories.edit', compact('cat'));
    }

    public function update(Request $request, $id){
        $cate = Category::find($id);
        $cate->name=$request->name;
         $cate->save();
         return redirect('/admin/categories');
    }

    public function GetCategoriesDetail($id){
        $catArray = Category::find($id);
        echo $catArray->name;
    }
    public function GetCat(){
    	$catArray=Category::all(); 
    	return view("admin.categories.edit",compact("catArray"));
     }

     public function save(Request $request){
    	$cate1=new Category();
    	$cate1->name=$request->name;
        if($cate1->save()){
            echo "<script>alert('added successfully')</script>";
        }
        else{
            echo "<script>alert('not added')</script>";
        }
        
    	return redirect("/admin/categories");
    }

     public function delete($id){
        $ret = Category::findOrFail($id)->delete();
        return redirect('/admin/categories');
    }

}