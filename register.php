<!-- This is the page for registration  interface -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>www.krismo.com</title>
  </head>
  <!-- <style>
    body{
      background-image: url('assets/img/body.jpg');
    

    }
    </style> -->

        <!-- start of navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark m-0 " style="background-color: rgb(2, 96, 112);">
            <a class="navbar-brand" href="#"><b><i>Krismo</i><i class="text-danger">.com</i></b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
              </ul>
              
            </div>
          </nav>
          
        <!-- End of navbar -->
  <body class="bg-light" style="background-image: url('assets/img/body.jpg');">


      <section class="mt-3">
   
        <div class="row">
            <div class="col-md-8 mx-auto card mt-4 p-2" style="opacity:80%;">
                <form class="p-3" method="post" action="config/registration.php">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Middle Name</label>
                      <input type="text" name="mname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Middle Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" name="lname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">NIN   </label>
                      <input type="text" name="nin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIN ">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputEmail1">Phone Number</label>
                      <input type="text" name="pnumber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputPassword1">Confirm Password</label>
                      <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                    </div>
                    <div class="col-md-12">
                      <button type="submit" name="register" class="btn btn-danger">Register</button> 
                      or <a href="index.php" style="font-style:oblique;">Login To Your Account</a>
                    </div>
                  
                  </div>
                  </form>
            </div>
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
