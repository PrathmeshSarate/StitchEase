<?php
include('components/navbar.php');    

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

    <title>Raymond</title>
    <style>
        .container h2 {
            width: 100%;
            color: #17A2B8;
            text-align: center;

        }

        #home,
        #feedback,
        #complaint,
        #complaint,
        #contactus,
        #aboutus {
            padding-top: 85px;
        }

        .feedbackRatingRadioDiv div input {
            margin-inline: 15px;
        }

        .form-group {
            padding: 10px;
        }
    </style>  e
</head>

<body>
    <section>
        <div class="container main_con">
            <!-- Container Start -->

            <div id="home" class="row">
                <!-- HOME -->
                <h2>WELCOME TO RAYMOND</h2>
                <p class="p-4">
                    We are Raymond Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae animi itaque magnam
                    sapiente, hic molestiae reprehenderit iste obcaecati, at officia neque maxime aperiam? Quod nemo
                    modi asperiores provident itaque doloribus recusandae, ut quis tenetur aut culpa repudiandae
                    corporis dignissimos, cupiditate iusto totam quas illo, magnam est exercitationem dicta amet
                    blanditiis iste! Et debitis, quisquam officiis, excepturi, eveniet accusantium cum aut recusandae
                    nostrum iste placeat sequi?
                </p>

            </div>
            <div id="aboutus" class="row">
                <!-- ABOUT US -->
                <h2>About Us</h2>
                <p class="p-4">
                    We are an education centre offering professional Whole Brain Development courses aspiring to uncover
                    the latent potential of our younger generation,with the firm belief that proper right brain training
                    will be immensely beneficial for children in unleashing that wondrous creativity within them, thus
                    further complementing the country’s commendable education system.We are an education centre offering
                    professional Whole Brain Development courses aspiring to uncover the latent potential of our younger
                    generation,with the firm belief that proper right brain training will be immensely beneficial for
                    children in unleashing that wondrous creativity within them, thus further complementing the
                    country’s commendable education system.
                </p>

            </div>

            <div id="feedback" class="row">                <!-- FEEDBACK -->

                <div class="col-md-12">
                    <h2 class="mb-5">Feedback</h2>
                                        
                    
                    <form action="" method="post" id="feedbackForm" class="text-center shadow-lg p-5">
                    
                        <div class="form-group row">
                            <label for="name" class=" form-check-label col-md-6">Enter Your Name:</label>
                            <input type="text" class=" form-control col-md-4" name="name" id="name" required>
                        </div>

                        <div class="form-group feedbackRatingRadioDiv row">
                            <label for="feedbackRating" class="form-check-label col-md-6">Feedback Rating:</label>
                            <div class="col-md-4 ">
                                <input type="radio" name="feedbackRating" id="feedbackRating" value="1" required>1
                                <input type="radio" name="feedbackRating" id="feedbackRating" value="2" required>2
                                <input type="radio" name="feedbackRating" id="feedbackRating" value="3" required>3
                                <input type="radio" name="feedbackRating" id="feedbackRating" value="4" required>4
                                <input type="radio" name="feedbackRating" id="feedbackRating" value="5" required>5
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Feedback" class="form-check-label col-md-6">Feedback</label>
                            <Textarea class="col-md-4 form-text" id="feedback1"></Textarea>
                        </div>
                        <input type="submit" class="btn btn-outline-info" value="Submit">
                        <div class="feedbackMsg"></div>
                    </form>
                    
                </div>

            </div>

            <div id="complaint" class="row">                <!-- COMPLAINT -->
                <div class="col-md-12">
                    <h2 class="mb-5">Complaint</h2>
                    <form action="" method="post" id="compliantForm" class="text-center shadow-lg p-5">
                        <div class="form-group row">
                            <label for="fname" class=" form-check-label col-md-3">Enter First Name:</label>
                            <input type="text" class=" form-control col-md-3" name="fname" id="fname" required>
                            <label for="lname" class=" form-check-label col-md-3">Enter Last Name:</label>
                            <input type="text" class=" form-control col-md-3" name="lname" id="lname" required>
                        </div>

                        <div class="form-group row">
                            <label for="complaint" class=" form-check-label col-md-6">Enter Complaint:</label>
                            <Textarea class="col-md-4 form-text" id="complaint1" required></Textarea>
                        </div>

                        <input type="submit" value="Submit" class="btn btn-outline-info">
                        <div class="complaintMsg"></div>

                    </form>
                </div>
            </div>

            <div id="contactus" class="row">                <!-- CONTACT US -->

                <div class="col-md-12">
                    <h2 class="mb-5">Contact Us</h2>
                    <form action="" method="post" id="contactUsForm" class="text-center shadow-lg p-5">
                        <div class="form-group row">
                            <label for="fname" class=" form-check-label col-md-3">Enter First Name:</label>
                            <input type="text" class=" form-control col-md-3" name="fname" id="fname" required>
                            <label for="lname" class=" form-check-label col-md-3">Enter Last Name:</label>
                            <input type="text" class=" form-control col-md-3" name="lname" id="lname" required>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class=" form-check-label col-md-6">Enter Phone Number:</label>
                            <input type="tel" class=" form-control col-md-6" name="tel" id="phone" required>
                        </div>
                        <div class="form-group row">
                            <label for="Email" class=" form-check-label col-md-6">Enter Email:</label>
                            <input type="email" class=" form-control col-md-6" name="email" id="email" required>
                        </div>

                        <div class="form-group row">
                            <label for="message" class=" form-check-label col-md-6">Enter Message:</label>
                            <!-- <input type="text" class="col-md-5" name="message" id="message"> -->
                            <Textarea class="col-md-6 form-text" id="cu_textbox" required></Textarea>
                        </div>

                        <input type="submit" value="Submit" class="btn btn-outline-info">
                        <div class="cu_msg"></div>

                    </form>
                </div>
            </div>

        </div> <!-- Container End -->
    </section>

    <!-- Footer -->
    <footer class="text-center p-5">&copy; 2022 || Raymond Shop</footer>


    <!-- JQuery JS -->
    <script src="components/js/jquery.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="components/js/bootstrap.min.js"></script>
</body>

</html>

<script>
    $(document).ready(function () {
        
        $('#feedbackForm').submit(function(e){
            e.preventDefault();
            
            var name = $('#name').val();
            var feedbackRating = $('#feedbackRating').val();
            var feedback = $('#feedback1').val();

            var action = 'feedback';
            

            $.ajax({
                url: "submitform.php",
                method: "POST",
                data: {
                    action: action,
                    name: name,
                    feedbackRating: feedbackRating,
                    feedback: feedback
                },
                success: function (data) {
                    $('.feedbackMsg').html(data);
                    
                    
                }
            });
        });

        $('#compliantForm').submit(function(e){
            e.preventDefault();
            
            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var complaint = $('#complaint1').val();

            var action = 'complaint';
            

            $.ajax({
                url: "submitform.php",
                method: "POST",
                data: {
                    action: action,
                    lname: lname,
                    fname: fname,
                    complaint: complaint
                },
                success: function (data) {
                    $('.complaintMsg').html(data);
                    
                    
                }
            });
        });

        $('#contactUsForm').submit(function(e){
            e.preventDefault();
            
            var fname = $('#fname').val();
            var lname = $('#lname').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var cu_textbox = $('#cu_textbox').val();


            var action = 'contactus';
            

            $.ajax({
                url: "submitform.php",
                method: "POST",
                data: {
                    action : action,
                    fname :fname,
                    lname :lname,
                    phone : phone,
                    email :email,
                    cu_textbox : cu_textbox
                },
                success: function (data) {
                    $('.cu_msg').html(data);
                    
                    
                }
            });
        });
        


    });
</script>