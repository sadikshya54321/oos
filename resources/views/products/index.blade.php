@extends('layouts.layout')
@section('content')

<a href="/categories/create-form" class="btn btn-info">new category</a><br/><br/>
<table class="table table-striped">
	<tr>
		<th>SN
		</th>
		<th>Name
		</th>
	</tr>

<?php $i = 1; ?>
<?php foreach($catArray as $cat) { ?>
   <tr>
   	<td><?php echo $i++ ?></td>
	<td><?php echo $cat->name;?></td>
   </tr>
<?php }
?>
</table>
@endsection