@extends('layouts.app')

@section('content')
@guest
  <p>Please login</p>
    @else
	<div class="container">
	    <div class="row">
		    <form action="/guests" method="POST" >
		    	{{ csrf_field() }}
			  <div class="form-group">
			    <label for="formGroupExampleInput">Guest Name</label>
			    <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Enter Name" required="required">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Guest Email</label>
			    <input type="email" class="form-control" id="formGroupExampleInput2" name="email" placeholder="Enter Email" required="required">
			  </div>
			  <button type="submit" class="btn btn-primary">Create Guest</button>
		    	<a href="/guests"><button type="button" class="btn btn-primary">Back</button></a>
  	    	</form>  
	    </div>
	</div>
@endguest	
@endsection