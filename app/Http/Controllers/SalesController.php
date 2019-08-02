<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sale;
class SalesController extends Controller
{
    public function Create(){
		return review('create');
	}
	public function Save(Request $request){
		echo $request->get('sales_id');
		echo $request->get('amount');
	}
	public function read(){
		$name="categories name";
		return view("read",compact('name'));
	}
}
