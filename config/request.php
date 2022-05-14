<?php
include 'database.php';

if(isset($_POST['request'])) {
  $rdate=$_POST['rdate'];
  $pdate=$_POST['pdate'];
  $description=$_POST['description'];
  $amount=$_POST['amount'];
  $customer=$_POST['customer'];
  $sql="INSERT INTO `loan_request`(`customer`,`required_date`, `pay_day`, `amount`, `description`, `status`) VALUES ('$customer','$rdate','$pdate','$amount','$description','pending')";
  $qry=mysqli_query($conn,$sql);

  if( !$qry){
    die(mysqli_error($conn));
  }
  else {
    header('Location:../active_loans.php?success');
  }
}
  ?>
