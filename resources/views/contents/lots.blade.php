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
					      <p>Initial Price ${{ $lot->starting_price }}	</p>
							<p>Current bid ${{ $lot->highest_bid }}</p>
							<a href="{{ route('lots.lot', ['id' => $lot->id]) }}">Lot details</a>
					    </div>
					  </div>
			@endforeach  
		</div>
    </div>
  </div>
  {{--<div class="panel panel-default">--}}
    {{--<div class="panel-body">Panel Content</div>--}}
  {{--</div>--}}
</div>
	
@endsection
