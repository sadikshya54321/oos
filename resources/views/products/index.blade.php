@extends('layouts.layout')
@section('content')

<a href="/admin/products/create" class="btn btn-info">new product</a><br/><br/>
<table class="table table-striped">
	<tr>
		<th>SN
		</th>
		<th>CategoryID
		</th>
		<th>Name
		</th>
		<th>Weight
		</th>
		<th>Image
		</th>
		<th>Price
		</th>
		<th>
		</th>
	</tr>

<?php $i = 1; ?>
<?php foreach($proArray as $pro) { ?>
   <tr>
   	<td><?php echo $i++ ?></td>
	<td><?php echo $pro->category_id;?></td>
	<td><?php echo $pro->products_name; ?></td>
   	<td><?php echo $pro->products_weight; ?></td>
   	<td><?php echo $pro->image; ?></td>
   	<td><?php echo $pro->price; ?></td>
   	<td>
		<a href="/admin/products/edit/<?php echo $pro->id ?>">Edit</a>&nbsp;
		<a href="/admin/products/delete/<?php echo $pro->id ?>">Delete</a></td>
   </tr>
<?php }
?>
</table>
@endsection