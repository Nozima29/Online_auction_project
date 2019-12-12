@extends('layouts.admin')
@section('content')
	
<div class="panel-group">
  
  <div class="panel panel-default">
    <div class="panel-body">

    	<div class="row text-center">
			  @foreach($lots as $lot)
					<div class="col-sm-4">
					    <div class="thumbnail">
					      <img src="">
					      <p><strong>{{ $lot->title }}</strong></p>
					      <p>Product launched date {{ $lot->posted_at }}</p>
					      <p>Initial Price {{ $lot->starting_price }}$</p>
					    </div>
					    <a href="" class="btn btn-default btn-lg">Delete</a>
					  </div>		
			@endforeach  
		</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-body">Panel Content</div>
  </div>
</div>
	
@endsection

