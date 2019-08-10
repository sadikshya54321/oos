
@extends('layouts.layout')
@section('content')
<form action="/admin/products/uploadfile" method="post" enctype="multipart/form-data">
	@csrf
	<input type="file" name="product_pic"/>
	<input type="submit" value="upload"/>
</form>
@endsection 
