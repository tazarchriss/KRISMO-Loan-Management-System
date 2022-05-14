  <!-- This is the page for active loans -->
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
    $sql1="SELECT * FROM user,loan WHERE user.id=loan.customer AND status='active'";
    $qry1=mysqli_query($conn,$sql1);
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
          <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">   
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
        <div class="row mx-auto">
        <div  class="col-md-8 mx-auto text-center" id="home">
            <div class="p-2">
                <div class="card bg-dark p-2" style=" color: rgb(2, 96, 112);border:1px solid red;" >
                    <div class="card-header" style="background-color: rgb(2, 96, 112);">
                    
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body bg-light">
                        <?php

                        if (mysqli_num_rows($qry1) == 0){


                        ?>
                        <h4 class="text-center text-danger"> No Customers are Available ! </h4>

                        <?php

                        }

                        else{
                          ?>
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>SN</th>
                          <th>Customer</th>
                          <th>Amount</th>
                          <th>Deadline</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                    for ($i=1; $i<=mysqli_num_rows($qry1); $i++){
                      $row = mysqli_fetch_array($qry1);
                    
                    //  $sql1="SELECT SUM(amount) FROM earning WHERE `userId`='$id' ";
                    //  $qry1=mysqli_query($conn,$sql1);
                    //  $res=mysqli_fetch_array($qry1);

                  
                  ?>
                        <tr>
                          <td>
                            <?php echo $i; ?></td>
                          <td>
                            <?php echo $row['fname'].' '.$row['lname']; ?>
                          </td>
                          <td>
                          <?php echo $row['pay_amount']; ?>
                          </td>
                          <td>
                          <?php echo $row['pay_day']; ?> 
                        </td>
                          
                          <td>
                              <div class="text-center">
                                  <a class="bg-dark p-1 text-light" href="single_loan.php?id=<?php echo $row['id'];?>"><i class="fa fa-eye "></i></a>
                                  <a class="text-danger p-1" style="background-color: rgb(2, 96, 112);" href="config/DeleteEarning.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash "></i></a>
                              </div>
                          </td>
                        </tr>
                        <?php 
                          }
                        }
                          ?>
                        </tbody>
                        </table>
                        </div>
                    </div>
                

            </div>

            <div class="collapse p-2 a" id="collapseExample1" data-toggle="collapse" href=".a #navbarNav" role="button" aria-expanded="false ">
            <div class="card mx-auto ">
             Notifications
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
      <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Page specific script -->
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
     
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
    </body>
  </html>

  <?php
  }
  ?>
