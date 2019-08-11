@extends('layouts.layout')
@section('content')
<form action="/admin/customers/update/<?php echo $custo->id?>" method="POST" >
	@csrf
	Name:<input type="text" name="name" value="<?php echo $custo->name;?>"/>
	Address:<input type="text" name="address" value="<?php echo $custo->address;?>"/>
	Phonw:<input type="text" name="phone" value="<?php echo $custo->phone;?>"/>
	<input type="submit" value="update"/>
</form>
@endsection 