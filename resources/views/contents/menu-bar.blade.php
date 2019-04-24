<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid-right">
        <a href="#" class="navbar-brand">
            <img src="text.jpg" alt="Logo" style="width: 100px; border-radius: 500px; margin-top: -3px;">
        </a>
    		<div class="navbar-header">           
        
           		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
				<span class="sr-only">Toggler</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
    
    <div class="collapse navbar-collapse" id="navbar-collapse-main">        
        <ul class="nav navbar-nav ml-auto">            
            <li class="list-item active"><a href="/">HOME</a></li>
            <li class="list-item"><a href="">ABOUT AUCTION</li></a>
            <li class="list-item"><a href="" data-toggle="dropdown" class="dropdown-toggle">LOTS
                <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    @for($i=0;$i<5;$i++)
                      <li><a href="/lots">Lots $i</a></li>
                    @endfor

                    {{-- @foreach($lots as $lot)
                        <li><a href="{{ $lot->$category }}"></a></li>                      
                    @endforeach                  --}}
                  
                  </ul>
            </li>                
            <li class="list-item"><a href="/news ">NEWS</li></a>
            <li class="list-item"><a href="">EVENTS</li></a>
            <li class="list-item"><a href="">CONTACTS</li></a>   
                
            </ul>
        <ul class="nav navbar-nav ml-auto">
      <li><input type="text" class="form-control" placeholder="Search" id="search"></li>
      <li><input type="submit" class="form-control" value="Send" id="sub"></li>        

      <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    </div>			
</nav>

@section('footer')
<footer class="text-center">
    <div class="row">
      <div class="col-md-6">
        Stay Contacting us via: 
        <a href=""><img src="facebook.png" class="icon" style="width: 30px; height: 30px;"></a>
        <a href=""><img src="instagram.png" class="icon" style="width: 30px; height: 30px;"></a>
        <a href=""><img src="twitter.png" class="icon" style="width: 30px; height: 30px;"></a>    
        <img src="text.jpg" style="width: 100px; border-radius: 500px; margin-left: 70px;"> 
    </div>
    <div class="col-md-6">
      Contacts:  
      <br>      
      <div class="pannel">
      <span class="glyphicon glyphicon-envelope">Email: bidusOnline@gmail.com</span><br>
      <span class="glyphicon glyphicon-phone">Phone: 000-000-000-000</span>
      </div>
    </div>

</footer>
@endsection



















