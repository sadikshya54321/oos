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
<form action="/cakes/save" method="post" id="cakeform">
  @csrf
  <table class="table" cellpadding="100" cellspacing="300">
    <tr>
      <th>Cake Base:</th>
      <td><input type="radio" name="base" value="halfpound">&nbsp;1/2 Pound  <br/><br/>
        <input type="radio" name="base" value="1pound">&nbsp;1 Pound <br/><br/>
        <input type="radio" name="base" value="2pounds">&nbsp;2 pounds <br/><br/>
        <input type="radio" name="base" value="twoandhalfpounds">&nbsp;2 & halfpounds <br/><br/>  
    	<input type="radio" name="base" value="3pounds">&nbsp;3 Pounds 
      </td>
  </tr>
  <tr>
      <th>Flavour:</th>
      <td><input type="radio" name="flavour" value="chocolate">&nbsp;Chocolates<br/><br/>
      	<input type="radio" name="flavour" value="vanilla">&nbsp;Vanilla<br/><br/>
      	<input type="radio" name="flavour" value="strawberry">&nbsp;Strawberry<br/><br/>
      	<input type="radio" name="flavour" value="redvelvet">&nbsp;Red Velvet<br/><br/>
      	<input type="radio" name="flavour" value="butterscotch">&nbsp;Butterscotch<br/><br/>
      	<input type="radio" name="flavour" value="blackforest">&nbsp;Blackforest<br/><br/>
      </td>
  </tr>
  <tr>  
	<th>Toppings:</th>
      <td>
      	<input type="radio" name="toppings" value="icing">&nbsp;Icing
      	<input type="radio" name="toppings" value="candies">&nbsp;Candies
      	<input type="radio" name="toppings" value="fruits">&nbsp;Fruits
      	<input type="radio" name="toppings" value="powdered sugar">&nbsp;Powdered sugar
      </td>
  </tr>
  <tr>
  	<th>Type:</th>
      <td>
      	<input type="radio" name="type" value="egg">&nbsp;Egg
      	<input type="radio" name="type" value="eggless">&nbsp;Eggless
      </td>
    </tr>

    <tr>
    	<th>Sugar:</th>
    	<td>
    	<input type="radio" name="sugar" value="yes">&nbsp;Yes 
    	<input type="radio" name="sugar" value="no">&nbsp;No
    </td>
</tr>
<tr>
	<td>
		<input type="submit" value="Place Order" class="btn btn-info"></td>
	</tr>
    </table>
</form>
</div>
</div>
@endsection 
