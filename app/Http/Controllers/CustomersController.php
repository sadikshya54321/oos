<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    //
    public function Index() {
        $cusArray=customer::all();
    	return view('customers.index',compact('cusArray'));
    }
    
   // public function Create(){
		//return view('customers.customer');
	//}
	public function Save(Request $request){
		echo $request->get('name');
		echo $request->get('address');
		echo $request->get('phone');
	}
	
   // public function read(){
    	//model name 
    	//$cus=customer::find(1);
    	//view file
    	//return view("customers.customer",compact('cus'));
  //  }
}
