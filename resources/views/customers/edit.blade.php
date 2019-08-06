@extends('layouts.layout')
<form action="/customers/update/<?php echo $cus->id?>" method="POST" >
	@csrf
	Name:<input type="text" name="name" value="<?php echo $cusArray->name;?>"/>
	Address:<input type="text" name="address" value="<?php echo $cusArray->address;?>"/>
	Phonw:<input type="text" name="phone" value="<?php echo $cusArray->phone;?>"/>
	<input type="submit" value="update"/>
</form>