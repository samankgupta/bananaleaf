<?php 

    session_start();
    session_destroy();
    echo "<script>alert('Logging Out.')</script>";
    echo "<script>window.open('login.php','_self')</script>";

?>