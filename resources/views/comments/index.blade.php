<h1>comments</h1>

@foreach($comments as $comment)
  <div class='comment-wall'>
    <h3>
      <a href="/comments/{{$comment->id}}">Show</a>
    </h3>
    <p>
      {{$comment->body}}
    </p>
  </div>

@endforeach
