@extends('layouts.layout')
@section('content')
<form action="/admin/products/update/<?php echo $prod->id?>" method="POST" >
	@csrf
	Id:<input type="text" name="category_id" value="<?php echo $prod->category_id;?>"/>
	Name:<input type="text" name="products_name" value="<?php echo $prod->products_name;?>"/>
	Weight:<input type="text" name="products_weight" value="<?php echo $prod->products_weight;?>"/>
	Image:<input type="text" name="image" value="<?php echo $prod->image;?>"/>
	Price:<input type="text" name="price" value="<?php echo $prod->price;?>"/>
	<input type="submit" value="update"/>
</form>
@endsection
 