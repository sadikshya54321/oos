<form action="/products/save" method="post">
    @csrf
    <input type="text" name="category_id">
    <input type="text" name="products_name">
    <input type="submit" value="submit">
</form>