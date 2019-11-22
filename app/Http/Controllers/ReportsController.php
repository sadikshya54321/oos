<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Sale;
class ReportsController extends Controller
{
	public function orders(Request $request){
		$orders=Sale::all();
		return view('admin.reports.orders', compact('orders'));
	}
	public function customers(){
		$customers=Customer::all();
		return view('admin.reports.customers', compact('customers'));
	}

}