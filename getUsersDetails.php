
<?php

include('dbcon.php');

if(isset($_POST["action"]) && $_POST["action"]=="checkUserPhone")
{
    $phoneNo = $_POST['phoneNo'];
    // $phoneNo ="9112101159";
    $query = "
    SELECT * FROM `user_details` WHERE `phone` =  $phoneNo
    ";
    

     $result = mysqli_query($conn, $query);
     $output ;

    if (mysqli_num_rows($result) > 0) {

         while($row = $result->fetch_assoc()){
            $output = json_encode($row);
            
            

         }
    
        

    }
    else
    {
        $output = "<h3>No Data Found</h3>";
    }
    echo $output;
    
}
?>