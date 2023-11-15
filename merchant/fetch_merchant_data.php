<?php
require('../dbcon.php');

if(isset($_REQUEST["action"]) && $_REQUEST["action"]=='login'){
    $uName =  mysqli_real_escape_string($conn,$_REQUEST["uName"]);
    $uPass = mysqli_real_escape_string($conn,$_REQUEST["uPass"]);
    
    $output;

    $sql = "SELECT * FROM `merchant_login` WHERE `username`  = '$uName' AND `password` = '$uPass'";
    $run = mysqli_query($conn, $sql);
  
    $row = mysqli_num_rows($run);
  
    if ($row < 1) { 
        $output="fail";
        

      } 
      else{
         
          $output="success";
        $result= mysqli_fetch_assoc($run);
        session_start();
        $_SESSION['id'] = $result['id'];
      }

      echo $output;

      

}

?>