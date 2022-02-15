
                          <?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';
        echo '</script>';
    }


  
    
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")'; 
        echo '</script>';
    }
    


   
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='./history.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank - Service : Send Money</title>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">



</head>

<body>
    <div class="preloader"></div>
    <!-- NaVigation Bar /Start -->
    <section class="nav">
        <header class="nav-main">
            <!-- Main website Logo  -->
            <div class="right">
                        <a href="./index.php"><img src="Images/IMG_20220211_213443-removebg-preview.png" alt="" class="logo"></a>

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
                            <a href="#" class="nav-link  " id="navbarDropdownMenuLink" data-toggle="dropdown"
                                role="button" aria-haspopup="true" aria-expanded="false">SERVICES </a>
                            <div class="dropdown-menu mt-2 mr-2 " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-dark " href="./User.php">Create User</a>
                                <div class="dropdown-divider text-dark"></div>
                                <a class="dropdown-item  text-dark" href="./transfer.php">Transfer Money</a>
                                <div class="dropdown-divider text-dark"></div>
                                <a class="dropdown-item text-dark" href="./history.php">Transaction History</a>
                            </div>
                        </li>



                        <li class="nav-item space">
                            <a href="index.php#contact" class="nav-link">CONTACT</a>
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
    <section class="head head1">
        <div class="heading">
            <div class="title">
                <h2>Transaction Gateway</h2>
                <p> The Easiest and Fastest Way To Send Money </p>
            </div>
        </div>
    </section>
    <section class="h-100 ">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6  d-xl-block ">
                                <?php
                            
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
                                <form method="post" name="tcredit" class="tabletext">
                                    <div class="card-body p-md-4 text-black bg-light">
                                        <h3 class="mb-5 text-uppercase text-center">Customer Details</h3>


                                        <div class="form-outline mb-2">
                                            <input type="number" readonly="readonly" id="form3Example1m"
                                                class="form-control form-control-lg"
                                                placeholder="<?php echo $rows['id'] ?>" />
                                            <label class="form-label" for="form3Example1m"> Customer Id </label>
                                        </div>






                                        <div class="form-outline mb-3">
                                            <input type="text" id="form3Example8" readonly="readonly"
                                                class="form-control form-control-lg"
                                                placeholder="<?php echo $rows['name'] ?>" />
                                            <label class="form-label" for="form3Example8"> Name </label>
                                        </div>



                                        <div class="form-outline mb-3">
                                            <input type="email" id="form3Example97" readonly="readonly"
                                                class="form-control form-control-lg"
                                                placeholder="<?php echo $rows['email'] ?>" />
                                            <label class="form-label" for="form3Example97"> Email ID </label>
                                        </div>
                                        <div class="form-outline mb-3">
                                            <input type="number" id="form3Example1n" readonly="readonly"
                                                class="form-control form-control-lg"
                                                placeholder="<?php echo $rows['balance'] ?>" />
                                            <label class="form-label" for="form3Example1n">Balance </label>
                                        </div>
                                    </div>

                            </div>
                            <div class="col-xl-6 d-xl-block">
                                <div class="card-body p-md-4  moneybg">
                                    <h3 class="mb-5 text-uppercase text-center text-light">Send Money To</h3>









                                    <div class="form-outline mb-4">
                                        <select name="to" class="form-control  form-control-lg bg-light" required>
                                            <option value="" disabled selected>Choose</option>
                                            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                                            <option class="table" value="<?php echo $rows['id'];?>">

                                                <?php echo $rows['name'] ;?> (Balance:
                                                <?php echo $rows['balance'] ;?> )

                                            </option>
                                            <?php 
                } 
            ?>
                                            <div>
                                        </select>

                                        <label class="form-label text-light" for="form3Example8"> Name </label>
                                    </div>




                                    <div class="form-outline mb-5">

                                        <input type="number" id="form3Example1n" name="amount"
                                            class="form-control form-control-lg  bg-light" required />
                                        <label class="form-label  text-light" for="form3Example1n">Amount </label>
                                    </div>

                                    <div class="form-outline mb-5">
                                        <div class="d-flex justify-content-center pt-5">
                                            <button class="btn btn-primary btn-lg ms-2"" name=" submit" type="submit"
                                                id="myBtn">Transfer</button>

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- Scroll btn /start -->

    <section>
        <div class="scroll-btn">
            <img src="./Images/up (2).png" alt="">
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js">
    </script>
    <script src="./JavaScript/nav.js"></script>
    <script src="./JavaScript/Scrollup.js"></script>
    <script src="./JavaScript/table.js"></script>
</body>

</html>
