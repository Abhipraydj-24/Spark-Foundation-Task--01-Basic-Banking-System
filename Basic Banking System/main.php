<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sparks Bank - Services: send money || transaction history</title>
  <link rel="apple-touch-icon" sizes="57x57" href="Images/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="60x60" href="Images/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="Images/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="Images/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="Images/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="Images/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="Images/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="Images/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="Images/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="Images/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="Images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="Images/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="Images/favicon-16x16.png">
  <link rel="stylesheet" href="./Style/History.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
  
  
  
</head>

<body >
  <div class="preloader"></div>
  <!-- NaVigation Bar /Start -->
  <section class="nav">
    <header class="nav-main">
      <!-- Main website Logo  -->
      <div class="right">
               <a href="./index.php"> <img src="Images/IMG_20220211_213443-removebg-preview.png" alt="" class="logo"></a>

      </div>
      <!------------------------>
      <div class="medium">
        <nav id="nav-menu">
          <!-- Responsive nav close icon -->
          <img src="Images/close.svg" class="close" id="nav-close" alt="">

          <!-- Nav Menu /Start-->
          <ul class="nav-list">
            <li class="nav-item space">
              <a href="./index.php" class="nav-link"> <span>HOME</span> </a>
            </li>
            <li class="nav-item space">
              <a href="./index.php#about" class="nav-link">ABOUT</a>
            </li>
            <li class="nav-item space">
              <a href="#" class="nav-link  " id="navbarDropdownMenuLink" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES </a>
              <div class="dropdown-menu mt-2 mr-2 " aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-dark " href="./User.php">Create User</a>
                <div class="dropdown-divider text-dark"></div>
                <a class="dropdown-item  text-dark" href="./transfer.php">Transfer Money</a>
                <div class="dropdown-divider text-dark"></div>
                <a class="dropdown-item text-dark" href="./history.php">Transaction History</a>
              </div>
            </li>
           
           

            <li class="nav-item space">
              <a href="./index.php#contact" class="nav-link">CONTACT</a>
            </li>

            <li class="nav-item space2">
              <div class="social">
                <a class="social-link" href="#"><img src="Images/facebook4.svg" alt=""></a>
                <a class="social-link" href="#"><img src="Images/instagram4.svg" alt=""></a>
                <a class="social-link" href="#"><img src="Images/youtube4.svg" alt=""></a>
                <a class="social-link" href="#"><img src="Images/pinterest4.svg" alt=""></a>
                <a class="social-link" href="#"><img src="Images/twitter4.svg" alt=""></a>
              </div>
            </li>
          </ul>
          <!-- Nav Menu /End-->

        </nav>
        <!-- Responsive nav Hamberger icon -->
        <img src="Images/nav-icon.svg" class="toggle" id="nav-toggle" alt="">
      </div>
      <!-- Navigation Bar Social Media  /Start-->

      <!-- Navigation Bar Social Media  /End-->



    </header>
  </section>
  <!-- NaVigation Bar /End -->
  <section class="head head3">
    <div class="heading">
        <div class="title">
            <h2>Welcome to THE SPARKS BANK</h2>
            <p> Select Your Account & Transfer Money</p>
        </div>
    </div>
        </section>
  
  <!-- Scroll btn /start -->
  
  <section class=" services " id="service">
    <div class="py-4">
        <h3 class="text-center"><span>Select</span> an option</h3>
    </div>

    <div class="container-fluid ">
        <div class="row justify-content-center align-content-center">
         
            <div class=" col-lg-3 col-md-4 col-12 py-3">
              <div class="card justify-content-center align-content-center text-center">
                <img src="./Images/undraw_transfer_money_rywa.svg" class="card-img-top my-3" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Easy Money Transfer</h5>
                
                  <a href="./transfer.php" class="btn btn-primary">Send Money</a>
                </div>
              </div>
            </div>
            <div class=" col-lg-3 col-md-4 col-12 py-3">
              <div class="card justify-content-center align-content-center text-center">
                <img src="./Images/undraw_online_transactions_-02-ka.svg" class="card-img-top" alt="...">
                <div class="card-body">
                    <br> 
                  
                  <h5 class="card-title">Transaction History</h5>
               
                  <a href="./history.php" class="btn btn-primary">View History</a>
                </div>
              </div>
            </div>
       
           

        </div>
    </div>
</section>
  <section>   
    <div class="scroll-btn">
         <img src="Images/up (2).png" alt="">
    </div>
</section>

<!-- Scroll btn /End -->
  <footer>
     <!-- Copyrights -->
     <div class=" py-2">
      <div class="container text-center">
        <p class=" mb-0 py-2">© 2022 SparksBank All rights reserved.</p>
      </div>
    </div>
  </footer>
  <!-- End -->
  <script src="./JavaScript/preloader.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
<script src="./JavaScript/nav.js"></script>
<script src="./JavaScript/Scrollup.js"></script>
<script src="./JavaScript/table.js"></script>
</body>

</html>
