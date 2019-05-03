@extends('layouts.main')

<div id="home">
	<div class="landing-text">
		<h1>Bid us - online auction</h1>
		<h3>join, play, bid, win!</h3>
		<a href="/createLots" class="btn btn-default btn-lg" id="center">Create Lots</a>
	</div>
</div>	
	
@section('content')
<div class="container">
	<br><br>
		<div class="row text-center">	
			<h1>Recent Products</h1>
		  		@foreach($lots as $lot)
					<div class="col-sm-6">
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


<div class="jumbotron">        
		    <div class="container-fluid text-center">
		  <h2>Little about company</h2>
		  <h4>What we offer</h4>
		  <br>
		  <div class="row">
		    <div class="col-sm-4">
		      <span class="glyphicon glyphicon-off"></span>
		      <h4>POWER</h4>
		      <p>Lorem ipsum dolor sit amet..</p>
		    </div>
		    <div class="col-sm-4">
		      <span class="glyphicon glyphicon-heart"></span>
		      <h4>LOVE</h4>
		      <p>Lorem ipsum dolor sit amet..</p>
		    </div>
		    <div class="col-sm-4">
		      <span class="glyphicon glyphicon-lock"></span>
		      <h4>JOB DONE</h4>
		      <p>Lorem ipsum dolor sit amet..</p>
		    </div>
		    </div>
		    <br><br>
		  <div class="row">
		    <div class="col-sm-4">
		      <span class="glyphicon glyphicon-leaf"></span>
		      <h4>GREEN</h4>
		      <p>Lorem ipsum dolor sit amet..</p>
		    </div>
		    <div class="col-sm-4">
		      <span class="glyphicon glyphicon-certificate"></span>
		      <h4>CERTIFIED</h4>
		      <p>Lorem ipsum dolor sit amet..</p>
		    </div>
		    <div class="col-sm-4">
		      <span class="glyphicon glyphicon-wrench"></span>
		      <h4>HARD WORK</h4>
		      <p>Lorem ipsum dolor sit amet..</p>
		    </div>
		  </div>
		</div>
  </div>
</div>
  <hr>
  <h2 class="text-center">Our clients say ...</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sunt nesciunt blanditiis, nisi repellendus eos beatae est facilis suscipit incidunt iste molestiae, autem doloremque sed consequuntur veniam odit. Tempora, assumenda.</h4>
    </div>
    <div class="item">
      <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel recusandae repellat harum neque, delectus magni quidem, unde aliquid sapiente, iusto mollitia assumenda amet eum error veniam quo necessitatibus molestiae. Sequi!</h4>
    </div>
    <div class="item">
      <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione similique nihil dolore illum a aut quos quaerat. At eum asperiores porro nihil illum reprehenderit accusamus inventore omnis. Quo repudiandae, labore.</h4>
    </div>
  </div>

  
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<hr><br>
@endsection