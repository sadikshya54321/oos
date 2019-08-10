@extends('layouts.layout')
@section('content')

<a href="/admin/categories/create" class="btn btn-info">new category</a><br/><br/>
<table class="table table-striped">
	<tr>
		<th>SN
		</th>
		<th>Name
		</th>
		<th></th>
	</tr>

<?php $i = 1; ?>
<?php foreach($catArray as $cat) { ?>
   <tr>
   	<td><?php echo $i++ ?></td>
	<td><?php echo $cat->name;?></td>
	<td>
		<a href="/admin/categories/edit/<?php echo $cat->id ?>">Edit</a>&nbsp;
		<a href="/admin/categories/delete/<?php echo $cat->id ?>">Delete</a></td>
   </tr>
<?php }
?>
</table> 
@endsection     