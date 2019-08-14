@extends('layouts.layout')
@section('content')
<title>Order Cake</title>
<form action="/cakes/save" method="post" >
  @csrf
  <table>
    <tr>
      <th>Base</th>
      <td><input type="radio" name="base" id="Halfpound">
        <input type="radio" name="base" id="1pound">

      </td>
  </tr>

  <tr>
      <th>Flavour</th>
      <td><input type="radio" name="flavour" value="chocolate">
      	<input type="radio" name="flavour" value="vanilla">
      </td>
  </tr>
  <tr>

      <th>Toppings</th>
      <td>
      	<input type="radio" name="toppings" value="icing">
      	<input type="radio" name="toppings" value="fruits">
      </td>
  </tr>
  <tr>
  	<th>Egg</th>
      <td>
      	<input type="radio" name="egg" value="yes">
      	<input type="radio" name="egg" value="no">
      </td>
    </tr>

    <tr>
    	<th>Sugar</th>
    	<td>
    	<input type="radio" name="sugar" value="yes">
    	<input type="radio" name="sugar" value="no">
    </td>
</tr>
    </table>
</form>
@endsection 
