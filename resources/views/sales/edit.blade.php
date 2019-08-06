@extends('layouts.layout')
<form action="/salesdetail/update/<?php echo $sal->id?>" method="POST" >
	@csrf
	SalesId:<input type="text" name="sales_id" value="<?php echo $sal->sales_id;?>"/>
	Amount:<input type="text" name="amount" value="<?php echo $sal->amount;?>"/>
	
	<input type="submit" value="update"/>
</form>
  