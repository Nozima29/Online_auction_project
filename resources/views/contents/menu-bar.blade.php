<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
	    <a href="#" class="navbar-brand">
            <img src="text.jpg" alt="Logo" style="width: 100px; border-radius: 500px; margin-top: -3px;">
        </a>
    		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main">
				<span class="navbar-toggler-icon"></span>
			</button>
    
    <div class="collapse navbar-collapse" id="navbar-collapse-main">        
        <ul class="nav navbar-nav ml-auto">            
            <li class="list-item active"><a href="/">HOME</a></li>
            <li class="list-item"><a href="{{ route('aboutme') }}">ABOUT AUCTION</li></a>
            <li class="list-item"><a href="{{ route('lots') }}">LOTS</li></a>
            <li class="list-item"><a href="{{ route('news') }}">NEWS</li></a>
            <li class="list-item"><a href="">EVENTS</li></a>
            <li class="list-item"><a href="{{ route('contact') }}">CONTACTS</li></a>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li><input type="text" class="form-control" placeholder="Search" id="search"></li>
            <li><input type="submit" class="form-control" value="Send" id="sub"></li>

            <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>			
    </ul>
  </div>
</nav>

@section('footer')
<footer class="text-center">
    <div class="row">
      <div class="col-md-6">
        <h3>Stay Contacting us via: </h3>
        <a href=""><img src="facebook.png" class="icon" style="width: 30px; height: 30px;"></a>
        <a href=""><img src="instagram.png" class="icon" style="width: 30px; height: 30px;"></a>
        <a href=""><img src="twitter.png" class="icon" style="width: 30px; height: 30px;"></a>    
        
        <br><br><br>
        <p class="text-center">Address: Tashkent city, Noname str</p>
        <p class="text-center">Orientation: Noplace ....</p>
        <br><br>
        <img src="text.jpg" style="width: 100px; border-radius: 500px; ">
    </div>
    <div class="col-md-4">
      <p>Leave some comments: </p>     
      
      <input type="text" class="form-control" placeholder="Name"><br>
      <input type="text" class="form-control" placeholder="Email"><br>
      <input type="text" class="form-control" placeholder="Phone number"><br>
      <textarea cols="5" rows="3" class="form-control" placeholder="comments"></textarea><br>
      <button class="btn btn-success btn-sm">Send</button>
    </div>
    <div class="col-md-3">
      
    </div>

</footer>

@endsection



















