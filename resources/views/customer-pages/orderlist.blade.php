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
		<?php if(isset($sale)) { ?>}
		<span style="background: brown; padding:10px 10px; color:white; font-size: ">Regular Orders</span>

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
<?php }?>
<span style="background: brown; padding:10px 10px; color:white; font-size: ">Custom Orders</span>
<?php if (isset($customorder)) { ?>
<table class="table">
			<tr>
				<td>Cake Base</td>
				<td>Flavour</td>
				<td>Toppings</td>
				<td>Egg</td>
				<td>Sugar</td>
				<td>Created</td>
				<td>Status</td>
			</tr>

			<?php foreach ($customorder as $cust) { ?>
				<tr>
				<td><?php echo $cust->base ?></td>
				<td><?php echo $cust->flavour ?> </td>
				<td><?php echo $cust->toppings ?> </td>
				<td><?php echo $cust->egg ?> </td>
				<td><?php echo $cust->sugar ?> </td>
				<td><?php echo $cust->created_at ?> </td>
				<td><?php 
				if ($cust->status==0)
				 {
				 	echo 'new order';
				} 
				else if($cust->status==1)
					{ echo 'completed';
					} ?>
						
				</td>
			</tr>
		<?php 	} ?>
	</table>
<?php } ?>
</div>
</div>
@endsection