<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Customer;  

class CustomersController extends Controller
{
    //
    public function Index() {
        $cusArray=Customer::all();
    	return view('admin.customers.index',compact('cusArray'));
    }
    
   public function Create(){
		  return view('admin.customers.form');
	   }

     public function edit($id){
        $custo =Customer::find($id);
        return view('admin.customers.edit', compact('custo'));
    }
    public function update(Request $request, $id){
        $cusArray = Customer::find($id);
        $cusArray->name=$request->name;
        $cusArray->address=$request->address;
       $cusArray->phone=$request->phone;

         $cusArray->save();
         return redirect('/admin/customers');
    }

    public function GetCus(){
      $cusArray=Customer::all(); 
      return view("admin.customers.edit",compact("cusArray"));
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
        
      return redirect("/admin/customers");
    }
	
	 public function delete($id){
        $ret = Customer::findOrFail($id)->delete();
        return redirect('/admin/customers');
    }
   
}
