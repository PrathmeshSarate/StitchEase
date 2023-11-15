<?php
include('components/navbar.php');
include('dbcon.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- ROBOTO FONT CSS -->
       <link rel="stylesheet" href="components/css/robotocondensed.css">

        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="components/css/bootstrap.min.css">
        
        
        <!-- TO HIDE NUMBER ARROWS -->
        <style>
            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }

            /* Firefox */
            input[type=number] {
            -moz-appearance: textfield;
            }
        </style>
        <!-- TO HIDE NUMBER ARROWS -->

    <title>Raymond</title>
</head>
<body>
    <?php
    if (isset($_REQUEST['shop'])) 
    {

        $pid = $_REQUEST['id'];

        $qry_for_diplay = "SELECT * FROM `cloths` WHERE `p_id` = '$pid'";

        $run = mysqli_query($conn, $qry_for_diplay);

        $row = mysqli_fetch_assoc($run);

       
    ?>
<div class="container">
    <div class="row">
        <div class="col-md-4  pl-md-5">
            <?php
             if ($row['p_type'] == 'Shirting') 
             {

            ?>
                <img width="250px" height="300px"  style="margin-top:100px"  src="Components/Shirting.jpg" alt="Shirting size image">

             <?php } 
             else if ($row['p_type'] == 'Trowser') {
             ?>
             <img width="300px" height="300px"  style="margin-top:100px"  src="Components/Trowser.jpg" alt="Shirting size image">
             <?php } ?>
            <div class="p-md-5">
                <a href="shop.php" class="btn btn-outline-danger mt-3 btn-block shadow-sm font-weight-bold" role="button">Cancel</a>
            </div>
        </div>
        
        <div class="col-md-8 mt-5">

            <?php
             if ($row['p_type'] == 'Shirting') 
             {      
            ?>
            <h3 class="text-center pt-5">ORDER DETAILS OF SHIRTING</h3>
            <!-- SHIRTING FORM START -->

            <form action="" class=" p-md-5" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <i class="fas fa-tshirt"></i><b class="text-info ml-3"> Product ID : </b><label class=" font-weight-bold"
                        readonly><?php echo $pid ?></label>
                    <input type="hidden" name="id1" value="<?php echo $pid ?>">
                    <label for=""><b class="text-info ml-5">Product Name: </b> <b><?php echo $row['name'] ?></b></label>
                </div>
                <div class="form-group ">
                    <i class="fas fa-edit"></i><label for="number" class="pl-2 font-weight-bold b">Mobile No :
                    </label><input type="number" placeholder="1234567890" class="form-control" required name="phoneNo"
                        id="phoneNo">
                    <div id="phoneMsg"></div>
                </div>
                <div class="form-group ">
                    <i class="fa fa-user"></i><label for="name" class="pl-2 font-weight-bold b">Name : </label><input
                        type="text" class="form-control-sm mr-3 ml-3" placeholder="First Name" required name="fname" id="fname"
                        pattern="[a-zA-Z]+$">
                    <input type="text" required class="form-control-sm mr-3 ml-3" placeholder="Last Name" name="lname" id="lname"
                        pattern="[a-zA-Z]+$">
                </div>
                <div class="form-group ">
                    <i class="fas fa-edit"></i><label for="neck" class="pl-2 font-weight-bold b">Neck Size :
                    </label><input type="number" class="form-control" placeholder="Neck Size" required name="neck" id="neck">
                </div>
                <div class="form-group ">
                    <i class="fas fa-edit"></i><label for="chest" class="pl-2 font-weight-bold b">Chest Size :
                    </label><input type="number" class="form-control" placeholder="Chest Size" required name="chest" id="chest">
                </div>
                <div class="form-group ">
                    <i class="fas fa-edit"></i><label for="waist" class="pl-2 font-weight-bold b">Waist Size :
                    </label><input type="number" class="form-control" placeholder="Waist Size" required name="waist" id="waist_s">
                </div>                
                <div class="form-group ">
                    <i class="fas fa-edit"></i><label for="sleeve" class="pl-2 font-weight-bold b">Sleeve Size :
                    </label><input type="number" class="form-control" placeholder="Sleeve Size" required name="sleeve" id="sleeve" >
                </div>
                <div class="form-group ">
                    <i class="fas fa-edit"></i><label for="shoulder" class="pl-2 font-weight-bold b">Shoulder Size :
                    </label><input type="number" class="form-control" required placeholder="Shoulder Size"
                        name="shoulder" id="shoulder">
                </div>
                <div class="form-group ">
                    <i class="fas fa-edit"></i><label for="length" class="pl-2 font-weight-bold b">Length Size :
                    </label><input type="number" class="form-control" placeholder="Length Size" " required name="length" id="length">
                </div>
                <div class="form-group ">
                    <i class="fas fa-edit"></i><label for="address" class="pl-2 font-weight-bold b">Address :
                    </label><textarea id="address" class="form-control" name="address" required></textarea>
                </div>
                <div class="form-group">
                    <label for=""><b>Price : <?php echo $row['price'] ?></b></label>
                    <small class=" font-weight-bold">Pay On Delivery</small>
                </div>
                <button type="submit" class="btn btn-outline-info mt-3 btn-block shadow-sm font-weight-bold"
                    name="upload_shirting" id="upload_shirting">Order</button>
            </form>
            <!-- SHIRTING FORM END -->
            <?php 
                    }
                    else if ($row['p_type'] == 'Trowser') {
                        ?>
            <h3 class="text-center pt-5">ORDER DETAILS OF TROWSER</h3>

            <!-- TROWSER FORM START -->
            <form action="" name="myform" id="myform" class=" p-md-5" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                <i class="fas fa-tshirt"></i><b class="text-info ml-3"> Product ID : </b><label class=" font-weight-bold"
                        ><?php echo $pid ?></label>
                    <input type="hidden" name="id1" value="<?php echo $pid ?>">
                    <label for=""><b class="text-info ml-5">Product Name: </b> <b><?php echo $row['name'] ?></b></label>
                </div>
                <div class="form-group ">
                    <i class="fas fa-edit"></i><label for="phone" class="pl-2 font-weight-bold b">Mobile No
                        : </label><input type="number" placeholder="1234567890" class="form-control" required
                        name="phoneNo" id="phoneNo">
                    <div id="phoneMsg"></div>
                </div>
                <div class="form-group ">
                    <i class="fa fa-user"></i><label for="name" class="pl-2 font-weight-bold b"> Name :
                    </label><input type="text" class="form-control-sm mr-3 ml-3" placeholder="First Name" name="fname" id="fname"
                        required>
                    <input type="text" class="form-control-sm mr-3 ml-3" placeholder="Last Name" name="lname" id="lname" required>
                </div>
                <div class="form-group ">
                    <i class="fas fa-edit"></i><label for="waist" class="pl-2 font-weight-bold b">Waist Size
                        : </label><input type="number" class="form-control" placeholder="Waist Size" name="waist" id="waist_t"
                        required>
                </div>
                <div class="form-group ">
                    <i class="fas fa-edit"></i><label for="seat" class="pl-2 font-weight-bold b">Seat/Hip Size :
                    </label><input type="number" class="form-control" placeholder="Seat Size" name="seat" id="seat" required>
                </div>
                <div class="form-group ">
                    <i class="fas fa-edit"></i><label for="thigh" class="pl-2 font-weight-bold b">Thigh Size
                        : </label><input type="number" class="form-control" placeholder="Thigh Size" name="thigh" id="thigh"
                        required>
                </div>
                <div class="form-group ">
                    <i class="fas fa-edit"></i><label for="leg_opening" class="pl-2 font-weight-bold b">Leg
                        Opening Size : </label><input type="number" class="form-control"
                        placeholder="Enter Leg Opening Size" name="leg_opening" id="leg_opening" required>
                </div>
                <div class="form-group ">
                    <i class="fas fa-edit"></i><label for="address" class="pl-2 font-weight-bold b">Address
                        : </label><textarea class="form-control" name="address" id="address" required> </textarea>
                </div>
               
                <div class="form-group">
                    <label for=""><b>Price : <?php echo $row['price'] ?></b></label>
                    <small class=" font-weight-bold">Pay On Delivery</small>
                </div>
                <button type="submit" class="btn btn-outline-info mt-3 btn-block shadow-sm font-weight-bold"
                    name="upload_trowser" id="upload_trowser">Order</button>

            </form>

            <!-- TROWSER FORM END -->


            <?php
                    }
                
                }else{
                                     
                }
                    ?>
        </div>


    </div> <!-- ROW END -->
</div><!-- CONTAINER END -->

<div class="filter_data"></div>

    <!-- JQuery JS -->
    <script src="components/js/jquery.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="components/js/bootstrap.min.js"></script>
    
<script>


</script>

<section>  <!-- inserting data in database in shirting -->
    <?php
    date_default_timezone_set("Asia/Calcutta");
    $time_date = date('Y-m-d H:i:s');
   
        if (isset($_REQUEST['upload_shirting']) ) {
            $pid = $_REQUEST['id1'];
            $fname = ucwords($_REQUEST['fname']);
            $lname = ucwords($_REQUEST['lname']);
            $neck = $_REQUEST['neck'];
            $chest = $_REQUEST['chest'];
            $waist  = $_REQUEST['waist'];
            
            $sleeve = $_REQUEST['sleeve'];
            $shoulder = $_REQUEST['shoulder'];
            $length = $_REQUEST['length'];
            $address = $_REQUEST['address'];
            $phone = $_REQUEST['phoneNo'];
            $order_id = mt_rand(100000, 999999999);


            $sql1 = "INSERT INTO `user_order`(`p_id`, `order_id`, `phone`, `p_type`, `status`, `address`,`order_date`) VALUES ('$pid','$order_id','$phone','Shirting','Pending','$address','$time_date')";
             $sql2 = "INSERT INTO `user_details`(`phone`, `fname`, `lname`, `address`,  `neck`, `chest`, `waist_s`, `sleeve`, `shoulder`, `length`) VALUES ('$phone','$fname','$lname','$address','$neck','$chest','$waist','$sleeve','$shoulder','$length')ON DUPLICATE KEY 
            UPDATE `fname` = '$fname',`lname` = '$lname',`address`= '$address',`neck`='$neck',`chest`='$chest', `waist_s`='$waist', `sleeve`='$sleeve', `shoulder`='$shoulder', `length`='$length'";
            
            
            
            $run1 = mysqli_query($conn, $sql1);
            $run2 = mysqli_query($conn, $sql2);
            if ($run1 == true && $run2 == true) 
            {

                
                ?>
                <script type="text/javascript">
                alert("Order Placed !!!!");
                location.href='shop.php';
                </script>
                
                <?php
                    
            } 
            else 
            {
                ?>
                <script>
                    alert('Please try after some time !!!!');
                </script>
                <?php                
                echo "<script> location.href='shop.php'; </script>";
            }
        }

                    ?>
</section>
    <!-- inserting data in database in shirting  END   -->

    
<section> <!-- inserting data in database in Trowsers -->
    <?php
     
     if (isset($_REQUEST['upload_trowser'])) {
        $pid = $_REQUEST['id1'];
        $fname = ucwords($_REQUEST['fname']);
        $lname = ucwords($_REQUEST['lname']);
        $seat = $_REQUEST['seat'];
        $thigh = $_REQUEST['thigh'];
        $waist  = $_REQUEST['waist'];
        $leg_opening = $_REQUEST['leg_opening'];
        $address = $_REQUEST['address'];
        $phone = $_REQUEST['phoneNo'];     
        $order_id = mt_rand(100000, 999999999);               

        $sql1="INSERT INTO `user_order`(`p_id`, `order_id`, `phone`, `p_type`, `status`, `address`,`order_date`) VALUES('$pid','$order_id','$phone','Trowser','Pending','$address','$time_date')";
        

        $sql2 = "INSERT INTO `user_details`
        (`phone`, `fname`, `lname`, `address`, `seat`, `thigh`, `waist_t`, `leg_opening`) VALUES 
        ('$phone','$fname','$lname','$address','$seat','$thigh','$waist','$leg_opening')
        ON DUPLICATE KEY 
            UPDATE `fname` = '$fname',`lname` = '$lname',`address`= '$address', `seat`='$seat', `thigh`='$thigh', `waist_t`='$waist', `leg_opening`='$leg_opening'";
        
        $run1 = mysqli_query($conn, $sql1);
        $run2 = mysqli_query($conn, $sql2);
        

        if ($run1 == true && $run2 == true) {
            ?>
        <script>
            alert('Order Placed !!!!');
            location.href='shop.php';
        </script>

    <?php
        } else {
            ?>
        <script>
            alert('Please Submit information corretly !!!!');
        </script>
        <?php
         echo "<script> location.href='shop.php'; </script>";
        }
    }
    ?>
<!--end section for Trowsers --> 

</section>
    <script>
        
  
        $('#phoneNo').keyup(function(){
            var phoneNo = $('#phoneNo').val();
            var action = "checkUserPhone";

           
            $.ajax({
                         

                         url: "getUsersDetails.php",
                         method: "POST",
                         data: {
                             action: action,
                             phoneNo: phoneNo,
                             
                         }
                         ,
                         success: function (data) {
                             var dataArray = JSON.parse(data);
                             console.log(dataArray["lname"]);
                            //  alert(dataArray["phone"])
                            
                            if (dataArray['phone'].match(phoneNo)) {
                             $('#fname').val(dataArray['fname']);
                            ////  $("#fname").prop('disabled', true);

                             $('#lname').val(dataArray['lname']);
                            ////  $("#lname").prop('disabled', true);

                             $('#address').val(dataArray['address']);
                             //$("#address").prop('disabled', true);

                             $('#neck').val(dataArray['neck']);
                             //$("#neck").prop('disabled', true);

                             $('#chest').val(dataArray['chest']);
                             //$("#chest").prop('disabled', true);

                             $('#waist_s').val(dataArray['waist_s']);
                             //$("#waist_s").prop('disabled', true);

                             $('#hip').val(dataArray['hip']);
                             //$("#hip").prop('disabled', true);

                             $('#sleeve').val(dataArray['sleeve']);
                             //$("#sleeve").prop('disabled', true);

                             $('#shoulder').val(dataArray['shoulder']);
                             //$("#shoulder").prop('disabled', true);

                             $('#length').val(dataArray['length']);
                             //$("#length").prop('disabled', true);

                             $('#seat').val(dataArray['seat']);
                             //$("#seat").prop('disabled', true);

                             $('#thigh').val(dataArray['thigh']);
                             //$("#thigh").prop('disabled', true);

                             $('#waist_t').val(dataArray['waist_t']);
                             //$("#waist_t").prop('disabled', true);

                             $('#leg_opening').val(dataArray['leg_opening']);
                             //$("#leg_opening").prop('disabled', true);

                             
                             

                            }
                             
                         }
                     

                 });
  
        const re = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/gm;
  
        if (phoneNo.match(re)) {
            $('#phoneMsg').removeClass('text-danger');
            $('#phoneMsg').addClass('text-success text-center')
            $('#phoneMsg').html("Valid Phone Number ✔");
            if(document.getElementById("upload_trowser"))
            {
               
                $("#upload_trowser").prop('disabled', false);
            }else
            {
                
                $("#upload_shirting").prop('disabled', false);
            }
        
        } else {
            if(document.getElementById("upload_trowser"))
            {                
                $("#upload_trowser").prop('disabled', true);
                
            }else
            {             
                $("#upload_shirting").prop('disabled', true);
            }
            $('#phoneMsg').removeClass('text-success');
            $('#phoneMsg').addClass('text-danger text-center')
            $('#phoneMsg').html('Please Enter Valid Phone Number 🗴');
        }

        });

    </script>
<section>

</section>

</body>
</html>