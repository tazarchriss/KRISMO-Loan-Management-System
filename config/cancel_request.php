<?php
  session_start();
  $id=$_SESSION['id'];
  include 'database.php';

  $sql= "DELETE FROM loan_request WHERE id='".$_GET['id']."'";
  $qry=mysqli_query($conn,$sql);
  $sql1="INSERT INTO `notification`(`user`, `message`) VALUES ('1','There is a loan request that has been canceled')";
  $qry1=mysqli_query($conn,$sql1);

  $sql2="INSERT INTO `notification`(`user`, `message`) VALUES ('$id','Your loan request has been canceled successfully')";
  $qry2=mysqli_query($conn,$sql2);

 
  if ($qry) {
      header('Location:../request_status.php?deleted');
  }

  
?>
