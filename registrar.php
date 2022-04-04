<!DOCTYPE html>
<html>
<head>
	<title>registrar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script src="https://kit.fontawesome.com/32f69680ca.js" crossorigin="anonymous"></script>
</head>
<body style="background-color:#5f9ea0">
	<header>
			<nav class="barra">
			</nav>
	</header>
<br>
		<div id="your" class="container" align="center" >
			<h1>SIGNUP</h1>
			<h5>Please fill in the fields with what is indicated, thank you.</h5>  
		</div>


		<div id="container" >
			  <div class="row">
			  		<div class="col-1"></div>

				    <div class="col-3">
				    	<br>
					     <span class="input-group-text">Name</span>
					     <span class="input-group-text">Last Name</span>
					     <span class="input-group-text">Email</span>
					     <span class="input-group-text">Password</span>
				    </div>
				    	
				    <div class="col-7">
				    	<br>

						<input type="text" class="form-control" id="n" placeholder="Enter your name">
				    	<input type="text" class="form-control" id="l" placeholder="Enter your last Name" >
				    	<input type="email" class="form-control" id="e" placeholder="Email" >
				        <input type="password" class="form-control" id="p" placeholder="Enter your password">
				    </div>
				    <div class="col-1">
				    	
				    </div>

				    
    
 			</div>
			<div align="center">
 				<a type="button" class="btn btn-primary btn-lg" id="re" align="center" >Register</a>
          		<a  href="index.php" type="button" class="btn btn-primary btn-lg" id="log" align="center" >Login</a>
		</div>
		</div>

<script>

  $("#re").click(function(){
    
    var n = document.getElementById('n').value;
    var l = document.getElementById('l').value;
    var e = document.getElementById('e').value;
    var p = document.getElementById('p').value;



    $.post("registrocontrolador.php",
    {	 
			          n: n,
			          l: l,
			          e: e,
			          p: p,
    },
    function(data, status){
      console.log(status);
      console.log(data);
    });
  });

</script>


</body>
</html>
