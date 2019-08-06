
@extends('layouts.layout')
@section('content')
<form action="/products/save" method="post">
	@csrf
	<table>
		<tr>
			<th>CategoryId</th><td><input type="text" name="category_id"></td></tr>
		<tr>
			<tr>
			<th>ProductsName</th><td><input type="text" name="products_name"></td></tr>
		<tr>
			<tr>
			<th>ProductsSize</th><td><input type="text" name="products_size"></td></tr>
		<tr>
			<tr>
			<th>Price</th><td><input type="text" name="price"></td></tr>
		<tr>
			<input type="hidden" name="category_id" value="1">
			<td><input type="submit" value="add products" class="btn btn-info"></td>
		</tr>	
	</table>
</form>
@endsection