<form action="" method="post">
  @csrf
    <label for="login">login</label>
    <input type="text" id="login" name="login">
    <label for="password">password</label>
    <input type="text" id="password" name="pwd">
    <button type="submit">se connecter</button>
    <br>
    <hr>
    <small style="color: red;">try: login:ahmed  pwd:1234</small>
</form>