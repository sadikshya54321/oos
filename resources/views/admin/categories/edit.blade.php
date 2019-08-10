@extends('layouts.layout')
@section('content')
<form action="/admin/categories/update/<?php echo $cat->id?>" method="POST" >
	@csrf
	Name:<input type="text" name="name" value="<?php echo $cat->name;?>"/>
	<input type="submit" value="update"/>
</form>
@endsection
       