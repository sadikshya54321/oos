@extends('layouts.layout')
@section('content')

<a href="/admin/customers/create" class="btn btn-info">new customer</a><br/><br/>
<table class="table table-striped">
	<tr>
		<th>SN
		</th>
		<th>Name
		</th>
		<th>Address
		</th>
		<th>Phone
		</th>
		<th>
		</th>

	</tr>

<?php $i = 1; ?>
<?php foreach($cusArray as $cus) { ?>
   <tr>
   	<td><?php echo $i++ ?></td>
	<td><?php echo $cus->name;?></td>
	<td><?php echo $cus->address;?></td>
	<td><?php echo $cus->phone;?></td>
	<td>
		<a href="/admin/customers/edit/<?php echo $cus->id ?>">Edit</a>&nbsp;
		<a href="/admin/customers/delete/<?php echo $cus->id ?>">Delete</a></td>
   </tr>
<?php }
?>
</table>
@endsection 