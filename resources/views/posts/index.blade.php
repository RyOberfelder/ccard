<div class="panel panel-default">
  <div class="panel-heading">
    <h2 class="panel-title">Posts</h2>
  </div>
  <div class="panel-body">


    @foreach($posts as $post)
    <div class="well well-sm">
      <span><a href="/posts/{{$post->id}}">{{$post->subject}}</a></span>
      <p>
        {{$post->body}}
      </p>
      <p>
        {{$post->creator}}
      </p>
  </div>
    @endforeach
  </div>
</div>
