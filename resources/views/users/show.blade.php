<div class="panel panel-default">
  <div class="panel-heading">{{$user->uname}}</div>
  <div class="panel-body">
    <div>
      <p>
        username: <i>{{$user->uname}} </i> <br />
        user email: {{$user->email}}<br />
        user first name:{{$user->fname}} <br />
        user last name: {{$user->lname}}<br />
        user location: {{$user->city}}, {{$user->state}}, {{$user->country}} <br />
      </p>
      <p>
        user description:<br/>
        {{$user->description}}
      </p>
      <p>
        The City is '{{$user->getLocation()}}'
      </p>
      @include('connections.create', ['user' => $user, 'authuser' => $authuser])
    </div>
  </div>
</div>
