<form action="" method="post">
  @csrf
    <label for="name">name: </label>
    <input type="text" id="name" name="name" value="{{ $product->ProName}}">
    <label for="price">price</label>
    <input type="text" id="price" name="price" value="{{ $product->price }}">
    <label for="date">date</label>
    <input type="date" id="date" name="date" value="{{ $product->date }}">
    <button type="submit">update product</button>
</form>