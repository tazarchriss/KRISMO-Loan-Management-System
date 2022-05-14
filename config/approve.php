<?php
include 'database.php';

if(isset($_POST['approve'])) {
  $id=$_POST['id'];
  $request=$_POST['request'];
  

  $sql="UPDATE loan_request SET `status`='approved' WHERE id='$request'";
  $qry=mysqli_query($conn,$sql);
 
  if( !$qry){
    die(mysqli_error($conn));
  }
  else {
    $sql="INSERT INTO `loan` (`request`,`customer`,`pay_day`,`issued_amount`,`pay_amount`) SELECT `id`,`customer`,`pay_day`,`amount`,`amount` FROM loan_request WHERE id='$request';  ";
    $qry=mysqli_query($conn,$sql);
    if (!$qry) {
      die(mysqli_error($conn));
    }
    else {
      header('Location:../issued _loans.php?success');
    }
    // 
  }
}
  ?>
