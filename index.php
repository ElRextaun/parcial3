<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Examen 3er Parcial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 
 </head>

 <body style="background-color:#5f9ea0">

  <div class="container">
   <br />
   <h2 align="center">Welcome to APIClima</h2>
   <br />
   <div class="panel panel-default">
    <div class="container" align="center" margen>
  <h2>Login</h2>
  <p>Start by entering your credentials or with social networks</p>
  <p>Please enter your email:</p>
  <div class="form-group">
			            	<div id="error" ></div>
							<label class="c1">Correo: </label>  <input class="c1.1" type="email" name="corre" placeholder="Introduzca su E-mail" required=true id="corre"><br></br>
    <script>

      function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
        console.log('statusChangeCallback');
        console.log(response);                   // The current login status of the person.
        if (response.status === 'connected') {   // Logged into your webpage and Facebook.
          testAPI();  
        } else {                                 // Not logged into your webpage or we are unable to tell.
          document.getElementById('status').innerHTML = 'Please enter ' +
            'your password.';
        }
      }
    
    
      function checkLoginState() {               // Called when a person is finished with the Login Button.
        FB.getLoginStatus(function(response) {   // See the onlogin handler
          statusChangeCallback(response);
        });
      }
    
    
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1241655992906819',
          cookie     : true,                     // Enable cookies to allow the server to access the session.
          xfbml      : true,                     // Parse social plugins on this webpage.
          version    : 'v12.0'           // Use this Graph API version for this call.
        });
    
    
        FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
          statusChangeCallback(response);        // Returns the login status.
        });
      };
     
      function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
          console.log('Successful login for: ' + response.name);
          document.getElementById('status').innerHTML =
            'Thanks for logging in, ' + response.name + '!';
        });
      }
    
    </script>    
    <div id="status">
    </div>
    <div class="container" class="input-group mb-3" class="form-group" align="center" margen>
    <label class="c2">Password:</label> <input class="c2.2" type="password" name="passwor" placeholder="Introduzca su Password" minlength="50" required=true id="passwor" ><br></br><br>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
    </div>
    <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
    </fb:login-button
  </form>
  <a href="Weather.php" type="submit" class="btn btn-primary btn-lg">Login</button>
  <a href="registrar.php" type="button" class="btn btn-primary btn-lg" id="sign" >Sign up</a>
</div>
   </div>
  </div>
 </body>
</html>