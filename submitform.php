<?php
if(isset($_POST['action'])){
if($_POST['action']=='feedback')
{

    $name = $_POST['name'];
    $feedbackRating = $_POST['feedbackRating'];
    $feedback = $_POST['feedback'];

    // $output = "Name : " . $name ." Feedback Rating : ". $feedbackRating ." Feedback : ". $feedback;
    $output = '
    <div class="pt-4 col-md-4" style="margin-left:355px;">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Feedback Submitted</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    ';
    echo $output;

}
else if($_POST['action']=='complaint')
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $complaint = $_POST['complaint'];

    $output = '
    <div class="pt-4 col-md-4" style="margin-left:355px;">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Complaint Registered</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    ';
    echo $output;


}
else if($_POST['action']=='contactus')
{
    $fname = $_POST['fname'];
    $lname =$_POST['lname'];
    $phone =$_POST['phone'];
    $email =$_POST['email'];
    $cu_textbox =$_POST['cu_textbox'];
    $output = '
    <div class="pt-4 " >
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>We will Conatact you soon!!!!!!! Have a Good Day</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    ';
    echo $output;


}
} //isset($_POST['action']) END
?>