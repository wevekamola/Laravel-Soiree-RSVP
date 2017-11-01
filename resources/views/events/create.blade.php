@extends('layouts.app')

@section('content')
@guest
  <p>Please login</p>
    @else
	<div class="container">
	    <div class="row">
		    <form action="/events" method="POST" >
		    	{{ csrf_field() }}
			  <div class="form-group">
			    <label for="formGroupExampleInput">Event Name</label>
			    <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Enter Name" required="required">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Event Theme</label>
			    <input type="text" class="form-control" id="formGroupExampleInput2" name="theme" placeholder="Enter Theme" required="required">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput">Event Date</label>
			    <input type="Date" class="form-control" id="formGroupExampleInput" name="date" placeholder="Enter Date" required="required">
			  </div>
			  <!-- <div class="form-group">
			    <label for="formGroupExampleInput2">Event Venue</label>
			    <input type="text" class="form-control" id="formGroupExampleInput2" name="event_venue" placeholder="Enter Venue">
			  </div> -->
			  <button type="submit" class="btn btn-primary">Create Event</button>
		    	<a href="/events"><button type="button" class="btn btn-primary">Back</button></a>
			</form>  
	    </div>
	</div>
@endguest	
@endsection