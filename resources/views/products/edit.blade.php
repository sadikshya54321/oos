@extends('layouts.layout')
@section('content')
<form action="/products/update/<?php echo $prod->id?>" method="POST" >
	@csrf
	Id:<input type="text" name="category_id" value="<?php echo $prod->category_id;?>"/>
	ProductsName:<input type="text" name="products_name" value="<?php echo $prod->products_name;?>"/>
	ProductsSize:<input type="text" name="products_size" value="<?php echo $prod->products_size;?>"/>
	Price:<input type="text" name="price" value="<?php echo $prod->price;?>"/>
	<input type="submit" value="update"/>
</form>
@endsection
 