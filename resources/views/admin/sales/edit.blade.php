@extends('layouts.layout')
@section('content')
<form action="/admin/sales/update/<?php echo $sale->id?>" method="POST" >
	@csrf
	SalesId:<input type="text" name="sales_id" value="<?php echo $sale->sales_id;?>"/>
	Amount:<input type="text" name="amount" value="<?php echo $sale->amount;?>"/>
	
	<input type="submit" value="update"/>
</form>
@endsection
  