<?php
require('../dbcon.php');
session_start();
if(!isset($_SESSION['id']))
{
    ?>
    <script>location.href="index.php";</script>
    <?php
}

?>

    <!-- ROBOTO FONT CSS -->
    <link rel="stylesheet" href="../components/css/robotocondensed.css">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="../components/css/bootstrap.min.css">

    
    <!-- JQuery JS -->
    <script src="../components/js/jquery.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="../components/js/bootstrap.min.js"></script>