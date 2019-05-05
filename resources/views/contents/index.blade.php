@extends('layouts.main')

<div id="home">
	<div class="landing-text">
		<h1>Bid us - online auction</h1>
		<h3>join, play, bid, win!</h3>
		<a href="/createLots" class="btn btn-default btn-lg" id="center">Create Lots</a>
	</div>
</div>	
<br><br>
@section('content')
<div class="container">
<div class="jumbotron">
	<h2 class="text-center">Little about Company</h2>
	<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati dolorum sed ducimus saepe voluptatem? Officiis eius cupiditate earum molestias esse, iste at fugiat. Ea, nesciunt facilis autem sunt numquam molestiae.</em></p>
</div>
	<br><br>
	
		<div class="row text-center">	
			<h1>Recent Products</h1>
			<hr>
		  		@foreach($lots as $lot)
					<div class="col-sm-6">
					    <div class="shadow p-3 mb-5 bg-white rounded">
					      <img src="">
					      <div class="card" style="width: 18rem;">
							  <img class="card-img-top" src="..." alt="Card image cap">
							  <div class="card-body">
							    <h5 class="card-title">{{ $lot->lot_name }}</h5>
							    <p class="card-text">{{ $lot->created_at }}</p>
					      		<p>Initial Price {{ $lot->bid_price }}$</p>											
							    <a href="#" class="btn btn-primary">Bid</a>
							  </div>
							</div>
					    
					      {{-- <p><strong>{{ $lot->lot_name }}</strong></p>
					      <p>Product launched date {{ $lot->created_at }}</p>
					      <p>Initial Price {{ $lot->bid_price }}$</p>
					      <p id="demo">Time left</p>
					      <script>
					      	var timeLeft = $lot->(created_at-
					      	var countDate = new Date()
					      </script>
					      <button class="btn" id="bid">Bid</button> --}}
					    
					    </div>
					  </div>		
				@endforeach  
			</div> 		
  		</div>
	

<hr><br>


@endsection
