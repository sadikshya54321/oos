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
    #no-msg{
        padding: 10px 10px;
        background:white;
    }
    .nopoint span{
        color:red;
        cursor:none;
    }
</style>
@section('content')

<div class="product-wrapper">
        <?php if(!empty($products)) { ?> 
            <?php $total =0; ?>
            <?php foreach ($products as $item) { ?>
                
                <div class="product">
                    <div><?php echo $item['name']; ?> </div>
                    <div><img src="/uploads/<?php echo $item['image']; ?>" width="200" height="200"/></div>

                    <br/>
                    <?php $total+=$item['price']; ?>
                     <div><?php echo $item['price']; ?> </div>
                    <a href="/cart/remove/<?php echo $item['id'] ?>">Remove Item</a>
                    <br/>
                </div>
            <?php } ?>
            <span class="btn btn-info nopoint"><span id="total-amount">Total : <?php echo $total;?> </span></span>
           <a href="/orders/cart/empty" class="btn btn-warning">Empty cart</a> &nbsp; <a href="/cart/checkout" class="btn btn-success">Check Out</a> 
        </div>
        <?php } else {?>         
        <span id="no-msg"> No any items in cart</span>
<?php }?>      
<br/><br/>

 @endsection
