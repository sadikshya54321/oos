@extends('layouts.app')
<style >
    .product{
        height: 200px;
        width:200px;
        background: #fff;
        margin:10px 10px;
    }
</style>
@section('content')
        <?php if(!empty($products)) { ?> 
            <?php foreach ($products as $item) { ?>
                <a href="/cart/remove">Remove Item</a>
                <div class="product">
                    <div><?php echo $item['name']; ?> </div>
                    <div><img src="/uploads/<?php echo $item['image']; ?>" width="200" height="200"/></div>
                    <br/>
                    <div><?php echo $item['price']; ?> </div>
                    <br/>
                </div>
            <?php } ?>
        <?php } else {?>         
        <span> No any items in cart</span>
<?php }?>        
<a href="/cart/checkout" class="btn btn-success">Check Out</a>
 @endsection
