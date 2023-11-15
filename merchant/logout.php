<?php
define('PAGE', 'logout');
include('session_check.php');

session_destroy();

echo "<script> location.href='index.php'; </script>";
exit;


?>
