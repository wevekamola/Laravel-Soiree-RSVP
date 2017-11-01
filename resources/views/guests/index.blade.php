@extends('layouts.app')

@section('content')

  @guest
  <p>Please login</p>
    @else
  	<div class="container">
  	    <div class="row">
  	        <a href="guests/create"><button type="button" class="btn btn-primary btn-sm pull left">Create a new Guest</button></a>
  	    </div>
  	</div>
  	<div class="container">
  		<h1>Guests</h1>
  		<table class="table table-responsive">
        <thead>
          <tr>
            <th>ID</th>
            <th>Guest Name</th>
            <th>Guset email</th>
            <th>Action</th>
          </tr>
        </thead>
        @if(count($guests) > 0)
      			@foreach($guests as $guest)
      				<tbody>
                  <tr>
                    <th scope="row">{{$guest->id}}</th>
                    <td><a href="/guests/{{$guest->id}}">{{$guest->name}}</a></td>
                    <td>{{$guest->email}}</td>
                    <td><a href=""><button type="button" class="btn btn-primary btn-sm">Update</button></a>
                    <a href=""><button type="button" class="btn btn-danger btn-sm">Delete</button></a></td>
                  </tr>  
              </tbody>
      			@endforeach	
      	    @else
      	    	<p>No guests created</p>
      	@endif  
      </table>		
  	</div>
  @endguest  
@endsection