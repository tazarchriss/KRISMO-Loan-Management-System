<?php
include 'database.php';

if(isset($_POST['add'])) {
  $owner=$_POST['owner'];
  $account=$_POST['account'];

  $sql="INSERT INTO `account`(`owner`, `ac_number`, `balance`) VALUES ('$owner','$account','0')";
  $qry=mysqli_query($conn,$sql);

  if( !$qry){
    die(mysqli_error($conn));
  }
  else {
    header('Location:../account.php');
  }
}
  ?>
