@extends('layouts.layout')
@section('content')
<form action="/admin/products/update/<?php echo $prod->id?>" method="POST" >
	@csrf
	<center>Id:<br/><input type="text" name="category_id" value="<?php echo $prod->category_id;?>"/><br/>
	Name:<br/><input type="text" name="products_name" value="<?php echo $prod->products_name;?>"/><br/>
	Weight:<br/><input type="text" name="products_weight" value="<?php echo $prod->products_weight;?>"/><br/>
	Image:<br/><input type="file" name="image" value= "<img src='/uploads/<?php echo $prod->image; ?> ' height='80px' width='100px' "/> <br/>
	Price:<br/><input type="text" name="price" value="<?php echo $prod->price;?>"/><br/>
	<input type="submit" value="update"/>
</form>
@endsection
 