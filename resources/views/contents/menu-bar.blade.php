<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
	    <a href="#" class="navbar-brand">
            <img src="text.jpg" alt="Logo" style="width: 100px; border-radius: 500px; margin-top: -3px;">
        </a>
    		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main">
				<span class="navbar-toggler-icon"></span>
			</button>
    
    <div class="collapse navbar-collapse" id="navbar-collapse-main">        
        <ul class="navbar-nav ml-auto">            
            <li class="nav-item active">
              <a href="/" class="nav-link">HOME</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">ABOUT AUCTION</a>
              </li>
            <li class="nav-item">
              <a href="" class="nav-link" data-toggle="dropdown" class="dropdown-toggle" >LOTS
                <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    @for($i=0;$i<5;$i++)
                      <li><a class="dropdown-item nav-link" href="/lots">Category $i</a></li>
                    @endfor                  
                  
                  </ul>
            </li>                
            <li class="nav-item">
              <a href="/news " class="nav-link">NEWS</li>
            </a>
            <li class="nav-item">
              <a href="" class="nav-link">CONTACTS</li>
              </a>                   
        
        <li class="nav-item">
          <form action="{{ route('search') }}" class="form-inline md-form form-sm mt-0" method="get">            
            <input type="text" name= "search" class="form-control form-control-sm ml-3 w-85"
             placeholder="search" aria-label="search" value="search">
          </li>
          <li>
            <button class="btn btn-dark btn-sm">Send</button>
          </li>
          </form>          
          </li>
      
      <li class="nav-item"><a href="/register" class="nav-link"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class="nav-item"><a href="/login" class="nav-link"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    
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



















