<?php 
    //Include constants.php for SITEURL
    include('config/constants.php');
    //1. Destory the Session
    session_unset();
    session_destroy();//Unsets $_SESSION['user']

    //2. REdirect to Login Page
    header('location:'.SITEURL.'front/sms2.php');

?>
