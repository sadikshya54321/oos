@extends(layouts.layout)
<form action="/salesdetails/update/<?php echo $sald->id?>" method="POST" >
	@csrf
	
	Item Id:<input type="text" name="item_id" value="<?php echo $sald->item_id;?>"/>
	Quantity:<input type="text" name="quantity" value="<?php echo $sald->quantity;?>"/>
	<input type="submit" value="update"/>
</form>
