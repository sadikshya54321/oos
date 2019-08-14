@extends('layouts.app')
<style>
    .product{
        height:150px;
        width:100px;
        background: #fff;
    }
</style>
@section('content')
              <? php foreach ($products as $product) {
                  <div class="product">
                  <div>
                  <?php $products->name;?> 
                  </div>
                  </div>
              <?php } ?>
            @endsection
