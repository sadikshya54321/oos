@extends('layouts.layout')
@section('content')

<a href="/products/create-form" class="btn btn-info">new products</a><br/><br/>
<table class="table table-striped">
	<tr>
		<th>SN
		</th>
		<th>CategoryId
		</th>
		<th>productsname
		</th>
	</tr>

<?php $i = 1; ?>
<?php foreach($proArray as $pro) { ?>
   <tr>
   	<td><?php echo $i++ ?></td>
	<td><?php echo $pro->category_id;?></td>

   	<td><?php echo $pro->products_name; ?></td>
   </tr>
<?php }
?>
</table>
@endsection. 