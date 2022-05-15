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

  if(isset($_POST['withdraw'])) {
    $id=$_POST['id'];
    
  
    $sql="UPDATE `loan` SET `status`='withdrawn' WHERE id='$id'";
    $qry=mysqli_query($conn,$sql);
   
  
    $sql1="SELECT * FROM user,loan,account where loan.id='$id' and user.id=loan.customer and account.owner=user.id ";
  
    $qry1=mysqli_query($conn,$sql1);
    $row=mysqli_fetch_array($qry1);
  
 
  
  $data= $row['balance']+$row['issued_amount'];
  $amount=$row['issued_amount'];
$owner=$row['customer'];
    $sql2="UPDATE `account` SET `balance`='$data' WHERE owner='$owner' ";
    $qry2=mysqli_query($conn,$sql2);
    $message='You have received'.' '.$amount.' '.'TSH from KRISMO and your new balance is'.' '.$data.' TSH.';
    $sql10="INSERT INTO `notification`(`user`, `message`) VALUES ('$owner','$message')";
    $qry10=mysqli_query($conn,$sql10);
    if( !$qry10){
      die(mysqli_error($conn));
    }
    else {
      header('Location:../notification.php?deleted');
    }
  }
  ?>
