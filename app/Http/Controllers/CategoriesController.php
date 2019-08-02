<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class CategoriesController extends Controller
{
    public function Index(){
    	$catArray=category::all();
    	return view('categories.index', compact('catArray'));
	}
	
	public function Save(Request $request){
		echo $request->get('name');
	}
}
