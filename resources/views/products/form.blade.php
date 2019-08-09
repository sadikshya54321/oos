
@extends('layouts.layout')
@section('content')
<form action="/admin/products/save" method="post" enctype="multipart/form-data">
	@csrf
	<table>
		<tr>
			<th>CategoryId</th><td><input type="text" name="category_id"></td></tr>
		<tr>
			<th>Name</th><td><input type="text" name="products_name"></td></tr>
			<tr>
			<th>Weight</th><td><input type="text" name="products_weight"></td></tr>
			<tr>
			<th>Image</th>
			<td><input type="file" name="image" class="form-control" required></td></tr>
			<tr>
			<th>Price</th><td><input type="text" name="price"></td></tr>
		<tr>
			<td><input type="submit" value="add products" class="btn btn-info"></td>
		</tr>	
	</table>
</form>
@endsection 