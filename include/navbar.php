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
                        <a href="profile.php" class="nav-link text-danger " style="font-weight:bolder;"><i class="fa fa-circle text-success"></i> <?php echo $row['fname'].' '.$row['lname']; ?></a>
                    </li>
                    <li class="nav-item">
                      <a href="config/logout.php" class="nav-link text-light" style="font-weight: bolder;"><i class="fas fa-sign-out-alt "></i> Log Out</a>
                  </li>
                </ul>
              </div>
            </nav>
            
          <!-- End of navbar -->
