<?php
if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$to_email = $email;
$subject = "Successful registration";
$body = "Dear".$name.",You have been successfully registered";
$headers = "From:smritijain6700@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
}
?>

<!DOCTYPE html>
<html>
    <head>
         
          <title>CRYPTOSATHI</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" type="text/css" href="style.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
      </head>
   <body id="background-image">      

         <div class="container">
            <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                     <h2>CRYPTOSATHI</h2>
                </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
            </div>
          </div>
          </nav> 

         <h5 class="text-center text-success">
           <div class="text-box">
             <span class="text1">WELCOME TO</span>
             <span class="text2">CRYPTOSATHI!!!</span>
          </div>
        </div>
         <div class="form">       
           <div class="panel panel-primary">
                <div class="panel-heading" >
                    <h4>REGISTER</h4>    
                </div>
                <div class="panel-body">                        
                 <form>
                       <label for="name">Name</label>
                       <div class="form-group">            
                           <input type="text" class="form-control"  placeholder="Name" name="name" required = "true">
                       </div>
                       <label for="email">Email</label>
                      <div class="form-group">              
                         <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                      </div>
                       <label for="password">Password</label>
                      <div class="form-group">
                         <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                      </div>
                     <label for="confirm password">Confirm Password</label>
                      <div class="form-group">
                         <input type="password" class="form-control" placeholder="Confirm Password" name="confirm password" required = "true">
                      </div>         
              <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button><br><br>
              </form><br/>
             </div>
                <div class="panel-footer"><p>Already have an account? <a href="login.html">Login</a></p></div>
            </div>  
              </div>
           </div>
          <div id="footer">
                <center>
                    <p><b>YOU CAN FIND US HERE!!</b></p>
                </center>
                    <p class="icon2">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-youtube"></i>
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-linkedin"></i>
                    <i class="fa fa-twitter"></i>
                  </p>	
           </div>
        </body>
   </html>
        
             