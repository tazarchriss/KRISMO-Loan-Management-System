<!-- This is a daily notification page -->
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
          <nav class="navbar navbar-expand-lg navbar-dark m-0 " style="background-color: rgb(2, 96, 112);">
              <a class="navbar-brand" href="#"><b><i>Krismo</i><i class="text-danger">.com</i></b></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" >
       

                <!-- right navigation -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link text-danger " style="font-weight:bolder;"><i class="fa fa-circle text-success"></i> Username</a>
                    </li>
                    <li class="nav-item">
                      <a href="index.html" class="nav-link text-light" style="font-weight: bolder;"><i class="fas fa-sign-out-alt "></i> Log Out</a>
                  </li>
                </ul>
              </div>
            </nav>
            
          <!-- End of navbar -->
    <body class="bg-light p-0" >
  

      <div class="wrapper navbar-expand-lg ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="row mx-auto">
            <div  class="col-md-8 mx-auto text-center" id="home">
                <div class="col-md-12 mt-3">
                <div class="card bg-dark p-1" style=" color: rgb(2, 96, 112);border:1px solid red;" >
                    <div class="card-header" style="background-color: rgb(2, 96, 112);">
                    
                    </div>
                    <div class="card-body bg-light text-left">
                 Notifications
                </div>
              </div>
            </div>
          <div class="row collapse p-2 a" id="collapseExample" id="collapseExample1" data-toggle="collapse" href=".a" role="button" aria-expanded="false">
            <div class="col-lg-12 mx-auto p-4 ">
          
                <div class="col-md-12 mx-auto">
                  <div class="card bg-dark p-2" style=" color: rgb(2, 96, 112);border:1px solid red;" >
                    <div class="card-header" style="background-color: rgb(2, 96, 112);"></div>
                    <div class="card-body bg-light">
                    <p class="text-left " style="font-weight: bold;"><i class="fas fa-user-tie  text-danger "></i> Owner :<hr></p>
                    <p class="text-left " style="font-weight: bold;"><i class="fas fa-credit-card text-danger "></i> Account No:  <hr></p>
                    
                    <p class="text-left " style="font-weight: bold;"><i class="far fa-money-bill-alt text-danger "></i> Account Balance: <hr></p>
                    <hr>
                  </div>
                  <div class="card-footer bg-secondary"></div>
                </div>
                </div>
              <br>  
              <a href="" class="btn float-left text-light" style="background-color: rgb(2, 96, 112);"><i class="fa fa-pen"></i> Update Card</a>
            </div>
          </div>
         
          
        </div> 
      <!-- start of side navbar -->
      <?php if ($row['role']=='1') {
        
         include 'include/adminnav.php';
        
      }
      else
      {
        include 'include/customernav.php';
      }

      ?>
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
