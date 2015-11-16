@extends('home')

@section('main')
<div class="panel panel-default col-md-5">
  <div class="panel-body">
    @include('posts.index', ['posts' => $posts])
		@include('posts.create')
  </div>
</div>
@endsection
