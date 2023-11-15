<?php
require('../dbcon.php');
session_start();
if(isset($_SESSION['id']))
{
    ?>
    <script>alert("You'r already Logged In");location.href="dash.php";</script>
    <?php

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- ROBOTO FONT CSS -->
    <link rel="stylesheet" href="../components/css/robotocondensed.css">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="../components/css/bootstrap.min.css">
</head>
<body>
    
  <div class="container-fluid mb-5">
    <div class="row justify-content-center mt-5 ">
      <div class="col-sm-6 col-md-4">
        <h1 class="heading text-info text-center mb-5" >LOGIN</h1>

        <form action="" class="shadow-lg p-4" method="POST" name="loginForm" id="loginForm">
        <center class="p-2"><small class="errMsg text-danger font-weight-bold"></small></center>
          <div class="form-group">
            <i class="fas fa-user"></i><label for="email" class="pl-2 font-weight-bold">Username :</label><input type="text" class="form-control" placeholder="Username" name="username" id="username" onkeyup="check_values();">
            <!--Add text-white below if want text color white-->
            <small class="form-text">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="pass" class="pl-2 font-weight-bold">Password :</label><input type="password" class="form-control" placeholder="Password" name="uPass" id="uPass" onkeyup="check_values();">
          </div>
          <div class="p-md-1">
            <button type="submit" class="btn btn-outline-info mt-3 btn-block shadow-sm font-weight-bold" name="login" id="login" disabled>Login</button>          </div>
            
        </form>
        <div class="text-center">
          <a class="btn btn-outline-secondary mt-3 shadow-sm font-weight-bold" href="../index.php">Back to Home</a>
        </div>
      </div>
    </div>
  </div>
    
    <!-- JQuery JS -->
    <script src="../components/js/jquery.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="../components/js/bootstrap.min.js"></script>
</body>
</html>
<script>

function check_values(){
  if($('#username').val() !="" && $('#uPass').val() !="" ){
    $('#login').prop('disabled', false);

  }
  else{
    $('#login').prop('disabled', true);

  }
}
  $('#loginForm').submit(function(e){
    e.preventDefault();
    var uNmae = $('#username').val();
    var uPass = $('#uPass').val();

    $.ajax({


      url: "fetch_merchant_data.php",
      method: "POST",
      data: {
        action: 'login',
        uName: uNmae,
        uPass: uPass

      },
      success: function (data) {
        if(data=='success'){
          alert("Welcome....");
          location.href='dash.php';
          
        }
        else if(data=='fail'){
          $('.errMsg').html('Wrong Username OR Password');
        }
        else{
          $('.errMsg').html("Sorry! Try after Some time...")
        }

      }


    });

    
  

});
</script>