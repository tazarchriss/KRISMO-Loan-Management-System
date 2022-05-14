 <!-- This page displays a single loan request -->
 <?php
  session_start();
  include 'config/database.php';
  if ($_SESSION['id']=='') {
    header('Location:index.php');
  }
  else{
    $id=$_SESSION['id'];
    $sql="SELECT * FROM user WHERE id='$id'";
    $qry=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($qry);
    $req=$_GET['id'];
    $sql1="SELECT * FROM loan_request,user WHERE loan_request.id='".$_GET['id']."' AND user.id=loan_request.customer";
    $qry1=mysqli_query($conn,$sql1);
    $res=mysqli_fetch_array($qry1);
?>

  <!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- Font Awesome icons  -->

        <!-- Font Awesome -->
      <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
           <!-- digital fonts -->
      <link href="http://fonts.cdnfonts.com/css/alarm-clock" rel="stylesheet">
                
      <title>www.krismo.com</title>
    </head>
    <style>
      @import url('http://fonts.cdnfonts.com/css/alarm-clock');
      </style>

          <!-- start of navbar-->
          <?php include 'include/navbar.php'; ?>
            
          <!-- End of navbar -->
    <body class="bg-light p-0" >
  

      <div class="wrapper navbar-expand-lg ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="row mx-auto" >
        <div  class="col-md-8 mx-auto " id="home">
            <div class="card mt-3 bg-dark p-2" style="border:1px solid red;color: rgb(2, 96, 112);">
                <div class="card-header" style="background-color:rgb(2, 96, 112);">

                </div>
                <div class="card-body bg-light">
                    <form action="config/approve.php" class="form-group" method="post">
                        <div class="col-md-6 float-left">
                            <label for="date" class="text-left text-bold"> Customer Names</label>
                            <input type="text"  value="<?php echo $res['fname'].' '.$res['mname'].' '.$res['lname']; ?>" class="form-control" id="date" >
                        </div>
                        <div class="col-md-6 float-left ">
                            <label for="amount" class="text-left"> Amount</label>
                            <input type="amount" name="amount" class="form-control" id="amount" value="<?php echo $res['amount'] ?>">
                        </div>
                        <div class="col-md-6 float-left">
                          <label for="date" class="text-left">Required Date</label>
                          <input type="date"  class="form-control" value="<?php echo $res['required_date']; ?>">
                      </div>
                      <div class="col-md-6 float-left">
                        <label for="date" class="text-left">Payment Date</label>
                        <input type="date" value="<?php echo $res['pay_day']; ?>" class="form-control" id="date">
                    </div>

                        <div class="col-md-12 mt-1">
                            <label for="amount" class="text-left"> Description</label>
                            <textarea name="description" class="form-control" id="" disabled><?php echo $res['description']; ?>
                            </textarea>
                        </div>
                        <input type="text" value="<?php echo $res['customer']; ?>" name="id" hidden>
                        <input type="text" value="<?php echo $req; ?>" name="request" hidden>
                   
<br>
                        <button type="submit" class="btn " name="approve" style="background-color: rgb(2, 96, 112);color:white;">Accept Loan </button>
                        <button type="submit" class="btn btn-danger " name="approve" >Decline Loan </button>
                      </form>
                </div>
            </div>
         
          
        </div> 
              <!-- start of admin side nav -->

    <?php include 'include/adminnav.php'; ?>
  <!-- end of admin side nav -->
      </div>
    </div>


        <section class="mt-3">
        
          <div class="row">
          
          </div>
        </section>
    
        <footer class="fixed-bottom bg-dark  text-light text-center mt-2 mb-0" style="height:100px;">
          <br>
            <strong class="text-light">Copyright &copy; 2022 <a class="text-danger">TazarChriss</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
            
            </div>
            <br>
            <h1> </h1>
          </footer>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>
  <?php
  }
  ?>
