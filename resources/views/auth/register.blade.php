@include ('partials.errors')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet"  href="css/style.css">
    <title>Register</title>
  </head>
  
  <body class="body-register">
   <div  class="container">
    <div class="row">
    <div class="col-md-10 offset=md-1"> 
     <div class="row">
         <div class="col-md-5 register-left">
             <h3>Register</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea quaerat officia minus eaque doloribus incidunt quia omnis magnam ipsam. Animi ipsum ea, cumque id commodi omnis esse nisi sequi. Numquam.</p>
            <a href="/" type="button" class="btn btn-primary">Home</a>
           
         </div>
         <div class="col-md-7 register-right">
                <form action="{{ route('auth.register') }}"  method="POST">
            <h2>Register Here</h2>
             <div>
                <div class="form-group" >
                    <label for="name" class="col-md-4 control-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" id="name" name="name" value="" autofocus>
                   
                </div> 
                <div class="form-group">
                <label for="username" class="col-md-4 control-label"> Username</label>
                    <input type="text" class="form-control" placeholder="Username" id="username"  name="username" >
                     
                </div> 
                <div class="form-group">
                <label for="email" class="col-md-4 control-label">E-Mail</label>
             <input type="email" class="form-control" placeholder="Email" id="email" name="email">
             
                </div> 
                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">Password</label>
                    <input type="password" class="form-control" placeholder="Password" id="password"  name="password">
                   
                </div> 
                @csrf
                 <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm</label>
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation">
                        </div>
                    <button class="btn btn-primary" type="submit">Register</button>
             </div>
            </form>
           
         </div>
     </div>
    </div></div></div>
    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>