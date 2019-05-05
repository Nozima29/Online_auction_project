@extends('layouts.main')

<div id="home">
	<div class="landing-text">
		<h1>Bid us - online auction</h1>
		<h3>join, play, bid, win!</h3>
		<a href="/createLots" class="btn btn-dark btn-lg" id="center">Create Lots</a>
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
			<h1 class="text-center">Recent Products</h1>
		<hr>	
		<div class="row text-center">	
			
		  		@foreach($lots as $lot)
					<div class="col-md-4">
                            <div class="ad-box">
                                
                                <div class="ads-thumbnail">
                                    <h4>{{ $lot->category }}</h4>
                                </div>
                                <div class="caption">
                                    <div class="ad-box-caption-title">                                     
                                    	<strong>{{ $lot->lot_name }}</strong><hr>
                                    	<img src="" alt="">Place for image                                               
                                    </div>                            
                                </div>

                                <div class="ad-box-footer">
                                    <span class="ad-box-price">Starting Price {{ $lot->bid_price }}</span>
	                                   <span class="ad-box-price">Time left: {{ $lot->created_at }}</span>
			                            <div class="ad-box-premium" data-toggle="tooltip" title="Premium Ad">
			                            <img src="" alt="" />
                                        </div>
                                </div>

                                <div class="countdown" data-expire-date="2020-09-09" ></div>
                                <div class="place-bid-btn">
                                    <a class="btn btn-primary">Bid</a>
                                </div>

                            </div>
                        </div>
				@endforeach  
			</div> 		
  		</div>
	

<hr><br>


@endsection
