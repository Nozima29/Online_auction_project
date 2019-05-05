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
  </div>
  </div>
	
@endsection
