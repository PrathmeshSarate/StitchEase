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


    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
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
    <div class="container" style="margin-top: 80px;">     <!-- CONTAINTER START -->
        <div class="row">            <!-- FIRST ROW START -->
            <div class="col-md-12">
                <h2 class="text-center text-info mb-5">Order Status</h2>
                <form action="" method="post" name="statusForm" id="statusForm" class="text-center">
                <div class="form-group ">
                    <Label class="mr-3">Enter Phone Number :</Label>
                    <input class="form-control-sm mr-3" type="number" name="phoneNo" id="phoneNo" required>
                    <div class="m-2" id="phoneMsg"></div>
                    <button class="btn btn-outline-info m-3" type="submit" id="submit" name="submit" disabled>Get Details</button>
                </div>
                </form>
            </div>

        </div>        <!-- FIRST ROW END -->
        <div class="row orderDetails">

        </div>
    </div>    <!-- CONTAINTER END -->
    

    <!-- JQuery JS -->
    <script src="components/js/jquery.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="components/js/bootstrap.min.js"></script>

    <script>
        
    $('#phoneNo').keyup(function(e){
        
        const re = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/gm;
        var phone = $('#phoneNo').val();
        if (phone.match(re)) {
            $('#phoneMsg').removeClass('text-danger');
            $('#phoneMsg').addClass('text-success text-center')
            $('#phoneMsg').html("Valid Phone Number ✔");
            document.getElementById("submit").disabled = false;
        
        } else {
            document.getElementById("submit").disabled = true;
            $('#phoneMsg').removeClass('text-success');
            $('#phoneMsg').addClass('text-danger text-center')
            $('#phoneMsg').html('Please Enter Valid Phone Number 🗴');
        }
       
    });
        $('#submit').click(function(e){
            e.preventDefault();
            var pn = $('#phoneNo').val();
            var action = "orderstatus";

            $.ajax({

                url: "fetch_data.php",
                method: "POST",
                data: {
                    action: action,
                    phoneNo : pn
                }
                ,
                success: function (data) {
                    $('.orderDetails').html(data);
                }
            });

        });
        
    </script>
</body>
</html>