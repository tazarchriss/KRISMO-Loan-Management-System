<!-- This is the page that performs the loan cancellation operation -->
<?php
include 'database.php';

if(isset($_POST['cancel'])) {
  $id=$_POST['id'];
  

  $sql="UPDATE `loan` SET `status`='cancelled' , `issued_amount`='0' WHERE id='$id'";
  $qry=mysqli_query($conn,$sql);
 
  if( !$qry){
    die(mysqli_error($conn));
  }

    // 
  }

  ?>
