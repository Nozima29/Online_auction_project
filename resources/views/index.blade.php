@extends('layouts.main')
@section('content')
<div class="container">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    {{-- <li data-target="#myCarousel" data-slide-to="3"></li> --}}
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="Auctions.jpg" alt="Chania">   
			    <div class="carousel-caption">
			      	<h1>Online Auction</h1>
			      	<p>Join, Target, Deal, Buy!</p>
			    </div>
			    </div>

			    <div class="item">
			      <img src="FB1.jpg" alt="Chania">
			    <div class="carousel-caption">
			      	<h1>Online Auction</h1>
			      	<p>Join, Target, Deal, Buy!</p>
			    </div>
			    </div>

			    <div class="item">
			      <img src="FB.jpg" alt="Flower">
			    <div class="carousel-caption">
			      	<h1>Online Auction</h1>
			      	<p>Join, Target, Deal, Buy!</p>
			    </div>
			    </div>
			    
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
	</div>
	<br><br>
		<div class="row text-center">
			<h2>Recent Products</h2>
		  @for($i=0;$i<6;$i++)
				<div class="col-sm-4">
				    <div class="thumbnail">
				      <img src="">
				      <p><strong>Place...  .$i</strong></p>
				      <p>Product launched date</p>
				      <button class="btn">Buy Product</button>
				    </div>
				  </div>		
		@endfor  
	</div>


</div>
@endsection


