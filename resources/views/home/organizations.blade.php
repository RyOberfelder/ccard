@extends('home')

@section('main')

<div class="panel panel-default">
  <div class="panel-heading clearfix">
    Organizations
    <button type="button" class="btn btn-default btn-sm pull-right glyphicon glyphicon-cog" data-toggle="modal" data-target="#becomeOrganizationModal">
      Settings
    </button>
  </div>
  <div class="panel-body">
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                  <div class="organization-wall">
                  @foreach($organizations as $organization)
                    <div class='organization'>
                      <h3>
                        <a href="/organizations/{{$organization->id}}">{{$organization->title}}</a>
                      </h3>
                      <p>
                        Location: {{$organization->city}}, {{$organization->state}}, {{$organization->country}}
                      </p>
                      <p>
                        Type: {{$organization->type}}
                      </p>
                      <p>
                        Description: {{$organization->description}}
                      </p>
                    </div>
                  @endforeach
                  </div>
                </div>
                <div class="col-lg-6">

                  {!! Form::open(['url' => 'organizations']) !!}
                  <div class="organization-form-title">
                    {!! Form::label('title','Organization Name:') !!}
                    {!! Form::text('title') !!}
                  </div>
                  <div class="organization-form-city">
                    {!! Form::label('city','Oranization City:') !!}
                    {!! Form::text('city') !!}
                  </div>
                  <div class="organization-form-state">
                    {!! Form::label('state','Organization State:') !!}
                    {!! Form::text('state') !!}
                  </div>
                  <div class="organization-form-country">
                    {!! Form::label('country','Organization Country:') !!}
                    {!! Form::text('country') !!}
                  </div>
                  <div class="organization-form-type">
                    {!! Form::label('type','Organization Type:') !!}
                    {!! Form::text('type') !!}
                  </div>
                  <div class="organization-form-description">
                    {!! Form::label('description','description:') !!}
                    {!! Form::textarea('description') !!}
                  </div>
                  {!! Form::submit('Submit Organization')!!}
                  {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
  </div>
</div>







<!-- Modal -->
<div class="modal fade" id="becomeOrganizationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Organization Alter-Egos</h4>
      </div>
      <div class="modal-body">
<!-- This is the become organization section -->
                      <h1>Organization Alter-Egos</h1>
                      <div class="organization-wall">
                      @foreach($egos as $ego)
                        <div class='organization'>
                          <h3>
                            <a href="/organizations/{{$organization->id}}">{{$ego->title}}</a>
                          </h3>
                          <p>
                            Location: {{$ego->city}}, {{$ego->state}}, {{$ego->country}}
                          </p>
                          <p>
                            Type: {{$ego->type}}
                          </p>
                          <p>
                            Description: {{$ego->description}}
                          </p>
                        </div>
                      <span><a href='/home/organization/{{$organization->id}}'> become {{$ego->title}}</a></span>
                      @endforeach
                      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@stop
