<div class="post-form-subject">
  {!! Form::label('subject','Subject:') !!}
  {!! Form::text('subject') !!}
</div>
<div class="post-form-body">
  {!! Form::label('body','Body:') !!}
  {!! Form::textarea('body') !!}
</div>
<select id="post-creator-select" width="90px"  class="form-control">
  <option value={{$user->id}}>{{$user->uname}}</option>
  @foreach($egos as $ego)
  <option value={{$ego->id}} >{{$ego->title}}</option>
  @endforeach
</select>
{!! Form::submit($submitButton)!!}
