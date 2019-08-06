@extends('layouts.layout')
@section('content')

<a href="/salesdetail/create" class="btn btn-info">new sales details</a><br/><br/>
<table class="table table-striped">
	<tr>
		<th>SN
		</th>
		<th>Item_Id
		</th>
		<th>quantity
		</th>
	</tr>

<?php $i = 1; ?>
<?php foreach($saldArray as $sald) { ?>
   <tr>
   	<td><?php echo $i++ ?></td>
	<td><?php echo $sald->item_id;?></td>
	<td><?php echo $sald->quantity;?></td>

   </tr>
<?php }
?>
</table>
@endsection   