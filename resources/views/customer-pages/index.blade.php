@extends('layouts.app')

<style>
	.box {
                float:left;
                background-color: #ebe9e9 !important;
                background: grey;
                border: 1px solid #red;
                margin: 10px 10px;

            }
        </style>
@section('content')
<div class="container">
	<div class="row featured">  
<title>Order Cake</title>
<form action="/cakes/save" method="post" >
  @csrf
  <table cellpadding="10" cellspacing="30">
    <tr>
      <th>Base:</th>
      <td><input type="radio" name="base" value ="Halfpound">1/2 Pound 
        <input type="radio" name="base" value="1pound">1 Pound 
        <input type="radio" name="base" value="2pounds">2 pounds 
        <input type="radio" name="base" value="2&halfpounds">2 & halfpounds 
    	<input type="radio" name="base" value="3pounds">3 Pounds 
      </td>
  </tr>
  <tr>
      <th>Flavour:</th>
      <td><input type="radio" name="flavour" value="chocolate">Chocolates
      	<input type="radio" name="flavour" value="vanilla">Vanilla
      	<input type="radio" name="flavour" value="strawberry">Strawberry
      	<input type="radio" name="flavour" value="redvelvet">Red Velvet
      	<input type="radio" name="flavour" value="butterscotch">Butterscotch
      	<input type="radio" name="flavour" value="blackforest">Blackforest
      </td>
  </tr>
  <tr>
	<th>Toppings:</th>
      <td>
      	<input type="radio" name="toppings" value="icing">Icing
      	<input type="radio" name="toppings" value="candies">Candies
      	<input type="radio" name="toppings" value="fruits">Fruits
      	<input type="radio" name="toppings" value="powdered sugar">Powdered sugar
      </td>
  </tr>
  <tr>
  	<th>Type:</th>
      <td>
      	<input type="radio" name="type" value="egg">Egg
      	<input type="radio" name="type" value="eggless">Eggless
      </td>
    </tr>

    <tr>
    	<th>Sugar:</th>
    	<td>
    	<input type="radio" name="sugar" value="yes">Yes
    	<input type="radio" name="sugar" value="no">No
    </td>
</tr>
<tr>
	<td>
		<input type="submit" value="Make cake" class="btn btn-info"></td>
	</tr>
    </table>
</form>
</div>
</div>
@endsection 
