
@extends('layouts.layout')
@section('content')
<form action="/customers/save" method="post">
	@csrf
	<table>
		<tr>
			<th>Name:</th>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<th>Address:</th>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<th>Phone:</th>
			<td><input type="text" name="phone"></td>
		</tr>
		<tr>
			<td><input type="submit" value="add customer" class="btn btn-info"></td>
		</tr>
	</table>
</form>
@endsection 