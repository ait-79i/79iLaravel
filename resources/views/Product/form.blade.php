<form action="" method="post">
  @csrf
    <label for="name">name: </label>
    <input type="text" id="name" name="name">
    <label for="price">price</label>
    <input type="text" id="price" name="price">
    <label for="date">date</label>
    <input type="date" id="date" name="date">
    <button type="submit">Add product</button>
</form>