@extends('layouts.layout')
@section('content')
<style>
	.ttl{
		color:brown;
	}
</style>
<div class="tt1"><h2>Sales Detail</h2></div>
<table class="table table-striped">
	<tr>
		<th>Customer Id </th><td><?php echo $salesd->customer_id; ?></td>
	</tr>
	<tr>
		<th>Amount</th><td><?php echo $salesd->amount; ?></td>
	</tr>
	<tr>
		<th>Quantity</th><td><?php echo $salesd->quantity; ?></td>
	</tr>
</table>


@endsection