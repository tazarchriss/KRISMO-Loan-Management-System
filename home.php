<!-- This is the customer's home -->
<?php
  session_start();
  include 'config/database.php';
  if ($_SESSION['id']=='') {
    header('Location:index.php');
  }
  else{
    $id=$_SESSION['id'];
    $sql="SELECT * FROM user,account WHERE user.id='$id' AND account.owner='$id'";
    $qry=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($qry);


    include 'include/header.php'; 
    
    include 'include/navbar.php'; 
    ?>
          <!-- End of navbar -->
    <body class="bg-light p-0" >
  

      <div class="wrapper navbar-expand-lg ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="row mx-auto">
        <div  class="col-md-8 mx-auto text-center" id="home">
            <div class="p-2">
              <h4 class="text-bold" style=" color: rgb(2, 96, 112);font-weight:bold;"><i class="fa fa-user"></i> Welcome Back <?php echo $row['fname']; ?> To Krismo Microfinance</h4>
              <hr>
              <div class="row">
       
    
        

              <div class="col-md-12 mt-1 text-center ">
             <!-- small box -->
             <div class="card bg-dark p-2" style=" color: rgb(2, 96, 112);border:1px solid red;" >
               <div class="card-header " style="background:rgb(2, 96, 112);"></div>
               <div class="card-body bg-success" style="opacity:80%;">
                <marquee behavior="" direction="right"><h2>TSH <?php echo $row['capacity']; ?></h2></marquee>
               
                 <h4>Loan Capacity</h4>
               </div>
             <div class="">
             <a href="loan_request.php" class="small-box-footer text-light">Request Loan <i class="fas fa-arrow-circle-right text-danger"></i></a>
             </div>
               
             </div>
           </div>
           <!-- ./col -->
     
      <br>
       <!-- Small boxes (Stat box) -->
     <!-- money box  -->
         <div class="col-md-12 text-center ">
           <!-- small box -->
           <div class="card bg-light">
             
                <img src="mone.jpg" style="width:100%;height: 180px;">
             
        
             
            
           </div>
         </div>
         <!-- ./col -->
   <br>
       


     

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
     <!-- start of customer's side  navbar -->

      <?php include 'include/customernav.php'; ?>
     <!-- End of Customer's side  navbar -->
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
