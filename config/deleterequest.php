<!-- This is the file that performs the logout function  -->
<?php
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['fname']);
    unset($_SESSION['mname']);
    unset($_SESSION['lname']);
    header('Location:../index.php');
    
?>

         
