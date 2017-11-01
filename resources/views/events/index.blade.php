@extends('layouts.app')

@section('content')

  @guest
  <p>Please login</p>
    @else
  	<div class="container">
  	    <div class="row">
  	        <a href="events/create"><button type="button" class="btn btn-primary btn-sm">Create a new event</button></a>
  	    </div>
  	</div>
  	<div class="container">
  		<h1>Events</h1>
  		<table class="table table-responsive">
        <thead>
          <tr>
            <th>ID</th>
            <th>Event Name</th>
            <th>Event Theme</th>
            <th>Event Date</th>
            <th>Action</th>
          </tr>
        </thead>
        @if(count($events) > 0)
      			@foreach($events as $event)
      				<tbody>
                  <tr>
                    <th scope="row">{{$event->id}}</th>
                    <td><a href="/events/{{$event->id}}">{{$event->name}}</a></td>
                    <td>{{$event->theme}}</td>
                    <td>{{$event->date}}</td>
                    <td><a href=""><button type="button" class="btn btn-primary btn-sm">Update</button></a>
                    <a href=""><button type="button" class="btn btn-danger btn-sm">Delete</button></a></td>
                  </tr>  
              </tbody>
      			@endforeach	
      	    @else
      	    	<p>No events created</p>
      	@endif  
      </table>		
  	</div>
  @endguest  
@endsection