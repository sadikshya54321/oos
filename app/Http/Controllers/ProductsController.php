<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index(){
    	echo "productList";
    }

    public function Search($keyword) {

    }
}