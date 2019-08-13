<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function FindByCategory($catId) {
    	$prods = Product::where('category_id', $catId)->get();
    	return view('customer-pages.productlist', compact('prods'));
    }
}
