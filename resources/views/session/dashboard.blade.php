<h1>this is the <i>dachboard</i></h1>


{{-- 3lach makhdmatch liya @isset(@Session('login')) --}}
  

@if(@Session('login')!== null)
  <h3>Hi, <span style="color: green;">{{ @Session('login') }}</span></h3>
@endif