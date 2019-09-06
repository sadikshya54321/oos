@extends('layouts.layout')
@section('content')

<a href="/admin/sales/create" class="btn btn-info">new sales</a><br/><br/>
<table class="table table-striped">
	<tr>
		<th>SN
		</th>
		<th>CustomerId
		</th>
		<th>Amount
		</th>

		<th></th>
	</tr>

<?php $i = 1; ?>
<?php foreach($salArray as $sal) { ?>
   <tr>
   	<td><?php echo $i++ ?></td>
	<td><?php echo $sal->customer_id;?></td>
	<td><?php echo $sal->amount;?></td>
	<td>
		<a  class="btn btn-success" href="/admin/sales/edit/<?php echo $sal->id ?>">Edit</a>&nbsp;
		<a  class="btn btn-danger" href="/admin/sales/delete/<?php echo $sal->id ?>">Delete</a>&nbsp;
		<a  class="btn btn-secondary" href="/admin/sales/detail/<?php echo $sal->id ?>">Detail</a></td>
   </tr>
<?php }
?>
</table>
@endsection