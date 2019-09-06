@extends('layouts.layout')
@section('content')
<form action="/admin/sales/update/<?php echo $sale->id?>" method="POST" >
	@csrf
	CustomerId:<input type="text" name="customer_id" value="<?php echo $sale->customer_id;?>"/>
	Amount:<input type="text" name="amount" value="<?php echo $sale->amount;?>"/>
	
	<input type="submit" value="update"/>
</form>
@endsection
  