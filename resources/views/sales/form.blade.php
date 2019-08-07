@extends('layouts.layout')
@section('content')
<form action="/sales/save" method="post">
	@csrf
	<table>
		<tr>
			<th>SalesId</th><td><input type="text" name="sales_id"></td>
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