<h1>Your Connections</h1>

@foreach($users as $user)
  <div class='user'>
    <h3>
      User Name: <a href="{{ url('/users', $user->id) }}">{{$user->uname}}</a>
    </h3>
    <h5>
      First Name: {{$user->fname}}
    </h5>
    <h5>
      Last Name: {{$user->lname}}
    </h5>
    <h5>
      Email: {{$user->email}}
    </h5>

  </div>

@endforeach
