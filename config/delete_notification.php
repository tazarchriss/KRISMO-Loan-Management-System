<?php
  session_start();
  include 'database.php';

  $sql= "DELETE FROM notification WHERE id='".$_GET['id']."'";
  $qry=mysqli_query($conn,$sql);
 
  if ($qry) {
      header('Location:../notification.php?deleted');
  }
?>
