@extends('layouts.app')

@section('content')

  @guest
  <p>Please login</p>
    @else
  	<div class="container">
  	    <div class="row">
  	        <a href="/guests"><button type="button" class="btn btn-primary btn-sm pull left">Back</button></a>
  	    </div>
  	</div>
  	<div class="container">
  		<h1>Guest Details</h1>
  		<table class="table table-responsive">
        <thead>
          <tr>
            <th>ID</th>
            <th>guest Name</th>
            <th>guest Email</th>
          </tr>
        </thead>
        @if(count($guests) > 0)
      			@foreach($guests as $guest)
      				<tbody>
                  <tr>
                    <th scope="row">{{$guest->id}}</th>
                    <td>{{$guest->name}}</td>
                    <td>{{$guest->email}}</td>
                  </tr>  
              </tbody>
      			@endforeach	
      	    @else
      	    	<p>No guests created</p>
      	@endif  
      </table>
          <h1>Invited in these Events</h1>
             @foreach($guest->GuestEvent as $event)
               <p> {{$event->event->name}} </p>
             @endforeach
          </div>
      		
  	</div>
  @endguest  
@endsection