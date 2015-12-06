@extends('home')

@section('extraScripts')

<!-- Here are the calendar parts that I needed-->
<script src="/js/moment.min.js"></script>

<!-- Here are the calendar parts that I needed-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.js"></script>

<!-- Here are the calendar parts that I needed-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.min.css">

<!-- Here are the calendar parts that I needed-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.4.0/fullcalendar.print.css">

<script>
$(document).ready(function() {

    // page is now ready, initialize the calendar...

    var theEvents =  {!! $events !!}
    var arrayEvents = [];
    $.each(theEvents, function( index, value ) {
      arrayEvents.push({title: value.title, start: value.event_due, description: value.description, writerType: value.eventable_type, writerId: value.eventable_id});

      console.log(value)
    });

  var ourCal =  $('#calendar').fullCalendar({
        events: arrayEvents,
        eventClick: function(calEvent, jsEvent, view) {
          console.log(calEvent.description);
          $("#show-event-title").html( '<h4> Title: </h4>' + calEvent.title );
          $("#show-event-date").html( '<h4> Event Date: </h4>' + calEvent.start.format("dddd, MMMM Do YYYY, h:mm:ss a"));
          $("#show-event-description").html( '<h4> Description: </h4>' + calEvent.description );
          console.log(calEvent.writerType)
          if(calEvent.writerType == 'App\\User'){
              $("#show-event-creator").html( '<h4> creator: </h4>' + '<a href="../users/' +calEvent.writerId+'">' + "Click Here to see user" +'</a>'  );
          }else{
            $("#show-event-creator").html( '<h4> creator: </h4>' + '<a href="../organizations/' +calEvent.writerId+'">' + "Click Here to see organization" +'</a>'  );
          }
          $('#eventViewModal').modal('show');
          }
    });
    console.log(ourCal);

    $('#calendar-next-button').click(function() {
      $('#calendar').fullCalendar('next');
    });
    $('#calendar-previous-button').click(function() {
      $('#calendar').fullCalendar('prev');
    });


});

$( document ).ready(function() {
  // Handler for .ready() called.
  $('#event-creator-select').change(function(e){
    $('#event-form').attr('action', 'http://homestead.app:8888/events/organizations/' + e.target.value);

    console.log($('#event-form').attr('action'));
  });
});
</script>

@endsection

@section('main')

<div class="col-sm-5">
	<div class="btn-group" role="group" aria-label="...">
	  <button type="button" class="btn btn-default" id="calendar-previous-button">Previous Month</button>
	  <button type="button" class="btn btn-default" id="calendar-next-button">Next Month</button>
	</div>
</div>

<div id='calendar'></div>

<br><br>
		
<div class="panel panel-default">
	<div class="panel-heading">
		<h1 class="panel-title"> Create a New Event </h1>
	</div>	
	
	<div class="panel-body">
		@include('events.create')
	</div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="eventViewModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Event Description</h4>
        </div>
        <div class="modal-body">
  <!-- This is the become organization section -->
              <div class="panel-body">
                <div class="well well-sm">
                  <p id="show-event-title"></p>
                  <p id="show-event-date"></p>
                  <p id="show-event-description"></p>
                  <p id="show-event-creator"></p>
                </div>
              </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
