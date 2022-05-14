<!-- This is the file for the database connection -->
<?php
    $server='127.0.0.1';
    $username='root';
    $password='';
    $dbname='krismo';

    $conn=mysqli_connect($server,$username,$password,$dbname);

    if(!$conn){
        die(mysqli_error($conn));
    }

?>
