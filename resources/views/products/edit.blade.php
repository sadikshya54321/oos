@extends('layouts.layout')
<form action="/products/update/<?php echo $pro1->id?>" method="POST" >
	@csrf
	Id:<input type="text" name="category_id" value="<?php echo $proArray->category_id;?>"/>
	ProductsName:<input type="text" name="products_name" value="<?php echo $proArray->products_name;?>"/>
	ProductsSize:<input type="text" name="products_size" value="<?php echo $proArray->products_size;?>"/>
	Price:<input type="text" name="price" value="<?php echo $proArray->price;?>"/>
	<input type="submit" value="update"/>
</form>
