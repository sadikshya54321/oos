
@extends('layouts.layout')
@section('content')
<form action="/categories/save" method="post">
	@csrf
	<table>
		<tr>
			<th>Name</th>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td><input type="submit" value="add category" class="btn btn-info"></td>
		</tr>	
	</table>
</form>
@endsection