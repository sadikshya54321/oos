<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    //
    public function Index() {
        $cusArray=Customer::all();
    	return view('customers.index',compact('cusArray'));
    }
    
   public function Create(){
		  return view('customers.form');
	   }

     public function edit($id){
        $cusArray =Customer::find($id);
        return view('customers.edit', compact('cusArray'));
    }
    public function update(Request $request, $id){
        $cusArray = Customer::find($id);
        echo $cusArray->name=$request->name;
        echo $cusArray->address=$request->address;
        echo $cusArray->phone=$request->phone;

         $cusArray->save();
         return redirect('/customer/getall');
    }

    public function GetCus(){
      $cusArray=Customer::all(); 
      return view("customers.edit",compact("cusArray"));
     }

      public function save(Request $request){
      $cusArray1=new Customer();
      $cusArray1->name=$request->name;
       $cusArray1->address=$request->address;
        $cusArray1->phone=$request->phone;

        if($cusArray1->save()){
            echo "<script>alert('added successfully')</script>";
        }
        else{
            echo "<script>alert('not added')</script>";
        }
        
      return redirect("customers");
    }
	
	
   
}
