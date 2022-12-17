<div>
  @foreach ($data as $pr)
  <div>
    {{ $pr->ProName }}, {{ $pr->price }}
    <a href="{{ Route('deletePro', ['id' => $pr->id]) }}">delete</a>
    <a href="{{ Route('updatePro', ['id' => $pr->id]) }}">update</a>
  </div>
      
  @endforeach
</div>