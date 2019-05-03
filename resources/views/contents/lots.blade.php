@extends('layouts.main')
@section('content')
	
<div class="panel-group">
  
  <div class="panel panel-default">
    <div class="panel-body">

    	<div class="row text-center">
			{{-- <h1 class="lots_title">{{ $lots->category }}</h1> --}}
			  @foreach($lots as $lot)
					<div class="col-sm-4">
					    <div class="thumbnail">
					      <img src="">
					      <p><strong>{{ $lot->title }}</strong></p>
					      <p>Product launched date {{ $lot->posted_at }}</p>
					      <p>Initial Price {{ $lot->starting_price }}$</p>
					      <button class="btn">Bid</button>
					    </div>
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
