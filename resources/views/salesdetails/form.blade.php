
@extends('layouts.layout')
@section('content')
<form action="/salesdetails/save" method="post">
	@csrf
	<table>
		<tr>
			<th>Item Id</th>
			<td><input type="text" name="item_id"></td>
		</tr>
		<tr>
			<th>Quantity</th>
			<td><input type="text" name="quantity"></td>
		</tr>
		<input type="hidden" name="item_id" value="1">
		<tr>
			<td><input type="submit" value="add salesdetail" class="btn btn-info"></td>
		</tr>	
	</table>
</form>
@endsection