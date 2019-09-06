@extends('layouts.layout')
@section('content')
<form action="/admin/sales/save" method="post">
	@csrf
	<table>
		<tr>
			<th>CustomerId</th><td><input type="text" name="customer_id"></td>
		</tr>
		<tr>
			<th>Amount</th><td><input type="text" name="amount"></td>
		</tr>
		<tr>
   			<td> <input type="submit" value="add sales" class="btn btn-info"></td>
   		</tr>
   	</table>
</form>
@endsection 