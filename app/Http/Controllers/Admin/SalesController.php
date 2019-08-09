<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Sale;
class SalesController extends Controller
{
    public function Index(){
		  $salArray=Sale::all();
    	return view('sales.index', compact('salArray'));
	}

	public function create(){
		return view("sales.form");
	}

	public function edit($id){
        $sale =Sale::find($id);
        return view('sales.edit', compact('sale'));
    }

    public function update(Request $request, $id){
        $sale = Sale::find($id);
        $sale->sales_id =$request->sales_id;
        $sale->amount =$request->amount;
      	$sale->save();
         return redirect('/sales');
    }

     public function getSale(){
      $salArray=Sale::all(); 
      return view("sales.edit",compact("salArray"));
     }

     public function save(Request $request){
  	   $sale =new Sale();
       $sale->sales_id=$request->sales_id;
       $sale->amount=$request->amount;
  	   if($sale->save()){
              echo "<script>alert('added successfully')</script>";
        }
        else{
            echo "<script>alert('not added')</script>";
        }
       return redirect("sales");
    }

    public function delete($id){
        $ret = Sale::findOrFail($id)->delete();
        return redirect('/sales');
    }

}
