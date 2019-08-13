<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function paymentslist(){
    	return view("customer-pages.paymentslist");
    }
}
