@extends('layouts.layout')
@section('content')

<a href="/sales/create" class="btn btn-info">new sales</a><br/><br/>
<table class="table table-striped">
	<tr>
		<th>SN
		</th>
		<th>salesID
		</th>
		<th>amount
		</th>

		<th></th>
	</tr>

<?php $i = 1; ?>
<?php foreach($salArray as $sal) { ?>
   <tr>
   	<td><?php echo $i++ ?></td>
	<td><?php echo $sal->sales_id;?></td>
	<td><?php echo $sal->amount;?></td>
	<td>
		<a href="/sales/edit/<?php echo $sal->id ?>">edit</a>&nbsp;
		<a href="/sales/delete/<?php echo $sal->id ?>">delete</a></td>
   </tr>
<?php }
?>
</table>
@endsection