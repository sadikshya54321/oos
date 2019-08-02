<form action="/customers/save" method="post">
	@csrf
	<input type="text" name="name">
	<input type="text" name="address">
	<input type="text" name="phone">
	<input type="submit" value="submit">
</form>