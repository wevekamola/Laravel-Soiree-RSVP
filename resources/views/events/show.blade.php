@extends('layouts.app')

@section('content')

  @guest
  <p>Please login</p>
	@else
	<div class="container">
		<div class="row">
			<a href="/events"><button type="button" class="btn btn-primary btn-sm">Back</button></a>
		</div>
	</div>
	<div class="container">
		<h1>Event Details</h1>
		<table class="table table-responsive">
		<thead>
		  <tr>
			<th>ID</th>
			<th>Event Name</th>
			<th>Event Theme</th>
			<th>Event Date</th>
		  </tr>
		</thead>
		@if(count($events) > 0)
				@foreach($events as $event)
					<tbody>
				  <tr>
					<th scope="row">{{$event->id}}</th>
					<td>{{$event->name}}</td>
					<td>{{$event->theme}}</td>
					<td>{{$event->date}}</td>
				  </tr>  
			  </tbody>
				@endforeach	
			@else
				<p>No events created</p>
		@endif  
	  </table>
	  <div class="container">
		<div class="row col-lg-6">
			<h1>Invited Guest</h1>
			<table class="table table-bordered">
			  <thead>
				<tr>
				  <th>Name</th>
				  <th>Email</th>      
				</tr>
			  </thead>
				@foreach($event->EventGuest as $guest)
				   <tbody>
						<tr>
						  <td>{{$guest->guest->name}}</td>
						  <td>{{$guest->guest->email}}</td>
						</tr>  
					</tbody>
			  @endforeach
			</table> 
		</div>
		<div class="row col-lg-6">   
			<h1>Guest List</h1><a href="{{$event->id}}/invite/all">invite all</a>
			<table class="table table-bordered">
				<thead>
				  <tr>
					<th>Name</th>  
				  </tr>
				</thead>
			  	@foreach($guests as $guest)
				  <tbody>
					  <tr>
						<td><a href="{{$event->id}}/invite/{{$guest->id}}">{{$guest->name}}</a></td>
					  </tr>  
				  </tbody>
			  	@endforeach
			</table>  	 
		 </div> 
	  </div>              
	</div>
  @endguest  
@endsection