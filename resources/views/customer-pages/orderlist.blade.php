@extends('layouts.app')
<style>
	.order-content{
		width:500px;
		height:500px;
		background: #fff;
	}

	.container{
		background: #fff;
	}

	.ttl{
		background: #fff;
	}

	.featured{
		overflow-x:auto;
		overflow-y: none;

	}
</style>
@section('content')
<div class="container">
	<div class="row featured">  
		<table class="table">
			<tr>
				<td>SalesID</td>
				<td>amount</td>
			</tr>
			<?php foreach ($sale as $sal) { ?>
				<tr>
				<td><?php echo $sal->id ?></td>
				<td><?php echo $sal->amount ?> </td>

			</tr>
		<?php 	} ?>
	</table>
</div>
</div>
@endsection