@extends('home')

@section('main')
  <div class="panel-body">
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
		@include('posts.create')
  </div>
@endsection

@section('extraScripts')
<!-- This is going to be the script section -->
<script>

$( document ).ready(function() {
  // Handler for .ready() called.
  $('#post-creator-select').change(function(e){
    $('#post-form').attr('action', 'http://homestead.app:8888/posts/organizations/' + e.target.value);

    console.log($('#post-form').attr('action'));
  });
});
</script>

@endSection
