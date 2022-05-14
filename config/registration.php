<!-- This is the page that performs the registration function/operation -->
<?php

session_start();
include 'database.php';

if(isset($_POST['register'])) {
  $fname=$_POST['fname'];
  $mname=$_POST['mname'];
  $lname=$_POST['lname'];
  $nin=$_POST['nin'];
  $email=$_POST['email'];
  $pnumber=$_POST['pnumber'];
  $password1=$_POST['password1'];
  $password2=$_POST['password2'];

if($password1!=$password2){
    header('location:../index.php?error=404');
}
else {
    $sql="INSERT INTO `user` (`fname`,`mname`,`lname`,`email`,`nin`,`pnumber`,`password`,`role`,`image`) VALUES ('$fname','$mname','$lname','$email','$nin','$pnumber','$password1','2','user.png')";
  $qry=mysqli_query($conn,$sql);

  if( !$qry){
    die(mysqli_error($conn));
  }
  else{
    $qry="SELECT * FROM user where uname='$uname' and password='$password1' limit 1 ";

    $login=mysqli_query($conn,$qry);
    $row=mysqli_fetch_array($login);
    
    $id=$row['id'];
    $_SESSION['id']=$id;
    $_SESSION['fname']=$fname;
    $_SESSION['sname']=$lname;

    header('location:../home.php');
  }
}
  
}

?>
