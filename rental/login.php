<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login Sistem</title>
    <style>
body{
  background:  #222d32 ;
  height: 100px;
}
.header{
  background:#48e248 !important;
}
.container {
    height: 100px;
   justify-content: center;
    align-items: center ;
    color: #48e248;
   
	padding: 40px;
	position: center;
	top: 50%;
	left: 50%;
    
}
.card{
  
    background-color: #222d32 !important;
    border-radius: 10px !important;

}
input[type="email"],
input[type="password"]{
 background: #1a2226;
 color: #fff;
 border:2px solid #00ff00;
 border-radius:10px;
 margin-bottom: 25px;
}
input[type="email"]:focus,
input[type="password"]:focus{
    outline: none;
    border: none;
    background:#1a2226;
    color:#fff;
    margin: 0;

}
.card-header{
    font-weight: 900;
    padding-top:20px;
}
.btn{
    background:#48e248 !important;
    color: #000 !important;
    transform: translateY(10px);
    font-size:14px;
    border-radius:10px !important;
}


    </style>
  </head>
  <body>
  <div class="header text-center">
	<h1>WELCOME TO  CAR RENTAL MEDAN OK</h1>
</div>	



  <div class="container mt-3">
        <div class="row">
            <div class="col">
             
  <div class="card w-50 mx-auto">
  <h5 class="card-header text-center">L O G I N</h5>
  <div class="card-body">
  
  <form method="post" action="masuk.php">
  <div class="form-group">
    <label >Username</label>
    <input type="email" class="form-control" name="txtusername">
  </div>

<div class="form-group">
      <label >Password</label>
    <input type="password" class="form-control" name="txtpassword">
  </div>
  <div class="d-grid gap-2">
  <button type="submit" class="btn btn-primary">LOGIN</button>
</div>
  
 
</form>
</div>
</div>    
</div>
 </div>
 </div>  
  
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>