@extends('layouts.layout')
@section('content')

<a href="/products/create" class="btn btn-info">new products</a><br/><br/>
<table class="table table-striped">
	<tr>
		<th>SN
		</th>
		<th>CategoryID
		</th>
		<th>productsname
		</th>
		<th>productssize
		</th>
		<th>price
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
   	<td><?php echo $pro->products_size; ?></td>
   	<td><?php echo $pro->price; ?></td>
   	<td>
		<a href="/products/edit/<?php echo $pro->id ?>">edit</a>&nbsp;
		<a href="/products/delete/<?php echo $pro->id ?>">delete</a></td>
   </tr>
<?php }
?>
</table>
@endsection