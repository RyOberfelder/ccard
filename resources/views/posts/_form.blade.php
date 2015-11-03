<div class="post-form-subject">
  {!! Form::label('subject','Subject:') !!}
  {!! Form::text('subject') !!}
</div>
<div class="post-form-body">
  {!! Form::label('body','Body:') !!}
  {!! Form::textarea('body') !!}
</div>
{!! Form::submit($submitButton)!!}
