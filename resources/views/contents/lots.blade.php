@extends('layouts.main')
@section('content')
	
<div class="panel-group">
  
  <div class="panel panel-default">
    <div class="panel-body">
		<h2 class="text-center">All items - Lots</h2>
		<br>
    	<div class="row text-center">
			{{-- <h1 class="lots_title">{{ $lots->category }}</h1> --}}
			  @foreach($lots as $lot)
					<div class="col-sm-6">
					    <div class="thumbnail">
					      <img src="">
					      <p><strong>{{ $lot->lot_name }}</strong></p>
					      <p>Product launched date {{ $lot->created_at }}</p>
					      <p>Initial Price {{ $lot->bid_price }}$</p>
					      <button class="btn">Bid</button>
					    </div>
					  </div>		
			@endforeach  
		</div>
    </div>
  </div>
  </div>
	
@endsection
