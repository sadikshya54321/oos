@extends('layouts.app')
<style >
    .product{
        height: 200px;
        width:200px;
        background: #fff;
        margin:10px 10px;
        float:left;
        margin-bottom:60px;
    }
    .product-wrapper{
        width:100%;
        height:400px;
    }
</style>
@section('content')

<div class="product-wrapper">
        <?php if(!empty($products)) { ?> 
            <?php foreach ($products as $item) { ?>
                
                <div class="product">
                    <div><?php echo $item['name']; ?> </div>
                    <div><img src="/uploads/<?php echo $item['image']; ?>" width="200" height="200"/></div>
                    <br/>
                    <div><?php echo $item['price']; ?> </div>
                    <a href="/cart/remove/<?php echo $item['id'] ?>">Remove Item</a>
                    <br/>
                </div>
            <?php } ?>
        <?php } else {?>         
        <span> No any items in cart</span>
<?php }?>     
</div>   
<br/><br/>
<a href="/cart/checkout" class="btn btn-success">Check Out</a>
 @endsection
