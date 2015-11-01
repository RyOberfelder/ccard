@if ($errors->any())
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}
    @endforeach
  </ul>
@endif
