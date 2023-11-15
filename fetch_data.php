<style>
   
    #p_image{
        width:150px;
        height: 150px; 

    }
    

</style>

    <!-- ROBOTO FONT CSS -->
    <link rel="stylesheet" href="components/css/robotocondensed.css">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="components/css/bootstrap.min.css">

<?php
// fetch_data.php


include('dbcon.php');



if(isset($_POST["action"]) && $_POST["action"]=="fetch_data.php")
{
	$query = "
		SELECT * FROM cloths WHERE stock = '0' 
	";
	if(isset($_POST["p_min"], $_POST["p_max"]) && !empty($_POST["p_min"]) && !empty($_POST["p_max"]))
	{
		$query .= "
		 AND price BETWEEN ".str_replace('From : ₹',"",$_POST["p_min"])." AND ".str_replace('To: ₹',"",$_POST["p_max"])."
		";
	}    

    if(isset($_POST['color']))
    {
        $color_filter = implode("','",$_POST["color"]);
        $query .= "
        AND color IN ('".$color_filter."') 
        ";
    }

    if(isset($_POST['material_type']))
    {
        $material_type = implode("','",$_POST["material_type"]);
        $query .= "
        AND material_type IN ('".$material_type."') 
        ";
    }

    if(isset($_POST['p_type']))
    {
        $p_type = implode("','",$_POST["p_type"]);
        $query .= "AND p_type IN ('".$p_type."') ";
    }

    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $total_row = $statement->rowCount();    
    $output = '';
    if($total_row>0)
    
    {
        foreach($result as $row)
        {
            $output .='
            <div class="col-sm-6 col-lg-3 col-md-4 text-center" style= "height:100%;" >
                <div class="p_style"  style="border:0px  solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; ">
                
                    <a href="components/product_img/'.$row['photo'].'" target="_blank">
                    <img id="p_image" src="components/product_img/'.$row['photo'].'" alt="product" >
                    </a>
                    
                    <p align="center;" class="text-info pt-2" style="height=100%">
                    
                    <strong>'.$row['name'].'</strong>
                    
                    </p>
                    
                    <h4 style="text-align:center;" class="text-danger"><b>Price : </b> '.$row['price'].'</h4>
                    
                    <small><b>Color :</b></small> '.$row['color'].'</small> <br>             
                   <small> <b>Material:</b></small> '.$row['material_type'].' <br>
                    
                <small>    <b>Product:</b> </small>'.$row['p_type'].'<br><br>
                    
                     <form action="user_order.php"  method="POST" class="d-inline">
                     
                     <input type="hidden" name="id" value='.$row['p_id'].'>
                     
                     <button type="submit" class="btn btn-success" name="shop" value="shop">Shop</button>
                     
                     </form>
                
                </div>     
            </div>
            </div>
            
            ';

        }
    }
    else
    {
        $output = "<h3>No Data Found</h3>";
    }
    echo $output;


}

if(isset($_POST["action"]) && $_POST["action"]=="orderstatus" && isset($_POST["phoneNo"]))
{
    $phoneNo = $_POST['phoneNo'];
    $query = "
    SELECT * FROM `user_order` WHERE `phone` =  $phoneNo ORDER BY `order_date` DESC
    ";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $output = $query;
         $output = '';
            $output .='
            <div class="col-md-12 text-center" style= "height:100%;" >
                <div  style="border:1px  solid #17a2b8; border-radius:35px; padding:16px; margin-bottom:16px; ">
                
                    <table class="table table-responsive-sm  text-center >
                    <thead class="text-center">
                        <tr >
                        
                        <th class="text-center" scope="col">Sr. No.</th>
                        <th class="text-center" scope="col">Order No.</th>
                        <th class="text-center" scope="col">Order Date Time</th>
                        <th class="text-center" scope="col">Product Type</th>
                        <th class="text-center" scope="col">Address</th>
                        
                        <th class="text-center" scope="col">Status</th>
                        </tr>
                        </thead>
                        </tbody>';

                $counter = 1;
                    while ($row = $result->fetch_assoc()) {
                               
                                $order_date = date_create($row["order_date"]);
                                $id = $row['id'];
                                $orderDetails ;
                                if($row["status"]=="Pending")
                                {
                                    $orderDetails ="In Process";
                                }
                                elseif($row["status"]=="Done")
                                {
                                    $orderDetails ="Delivered";
                                }else{
                                    $orderDetails = "Please Contact Shop";
                                }

                        $output.= '<tr>';



                       $output.='<td>' . $counter . '</td>';
                        
                       $output.='<td>' . $row["order_id"] . '</td>';
                       $output.='<td>' . date_format($order_date,"d/m/Y H:i:A") . '</td>';
                        
                       $output.='<td>' . $row["p_type"] . '</td>';
                        
                        
                        
                       $output.='<td>' . $row["address"] . '</td>';
                        
                       
                        
                       $output.='<td>' . $orderDetails . '</td>
                        </tr>
                        ';
                        $counter++;
                    }
                    $output.='</tbody>
	                </table>';

                
                    $output.='</div>     
                </div>
            
            
            ';

        

    }
    else
    {
        $output = "<h3>No Data Found</h3>";
    }
    echo $output;
    

}

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
// $phoneNo ="9112101159";
//     $query = "
//     SELECT * FROM `user_details` WHERE `phone` =  $phoneNo
//     ";
    

//      $result = mysqli_query($conn, $query);
//      $output ;

//     if (mysqli_num_rows($result) > 0) {

//          while($row = $result->fetch_assoc()){
//             $output = json_encode($row);
//             // echo( json_encode( $row ) );
            

//          }
    
        

//     }
//     else
//     {
//         $output = "<h3>No Data Found</h3>";
//     }
    // echo $output;
 
?>

    <!-- JQuery JS -->
    <script src="components/js/jquery.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="components/js/bootstrap.min.js"></script>

<style>
    p_style :hover {
        background-color: red;

    }
</style>