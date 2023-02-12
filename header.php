
<?php
include "admin/connect.php" ;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boutique | Ecommerce bootstrap template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Lightbox-->
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <!-- Bootstrap select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.theme.default.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page-holder">
      <!-- navbar-->
      <header class="header bg-white">
        <div class="container px-0 px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.php"><span class="font-weight-bold text-uppercase text-dark">Boutique</span></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <?php $page = basename($_SERVER['PHP_SELF']); ?>
                  <!-- Link--><a class="nav-link
                  <?php
                  if ($page== "index.php") {
                    echo "active";
                  }
                  ?>
                  " href="index.php">Home</a>
                </li>
                <li class="nav-item
                <?php
                  if ($page == "shop.php") {
                    echo "active";
                  }
                  ?>
                  
                  
                ">
                  <!-- Link--><a class="nav-link" href="<?php echo"shop.php?id=1&page=1&active=1"?>">Shop</a>
                </li>
                
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                  <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="index.php">Homepage</a><a class="dropdown-item border-0 transition-link" href="<?php echo "shop.php?id=1&page=1&active=1"?>">Category</a><a class="dropdown-item border-0 transition-link" href="cart.php">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="checkout.php">Checkout</a></div>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">               
                <li class="nav-item"><a class="nav-link <?php
                  if ($page== "cart.php") {
                    echo "active";
                  }
                  ?>" href="cart.php"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>Cart<small class="text-gray num">(<?php
                    $sql ="SELECT * from cart";
                    $result=$conn->query($sql);
                    $num=$result->num_rows;
                    echo $num;
                    ?>)</small></a></li>
                <li class="nav-item"><a class="nav-link <?php
                  if ($page== "wishlist.php") {
                    echo "active";
                  }
                  ?> " href="wishlist.php"> <i class="far fa-heart mr-1"></i><small class="text-gray coun">(<?php
                  $sql2 ="SELECT*FROM wishlist";
$result2 = $conn->query($sql2);
$num=$result2->num_rows;
echo $num;
?>)</small></a></li>
                <li class="nav-item"><a class="nav-link" href="admin/register.php"> <i class="fas fa-user-alt mr-1 text-gray"></i>Login</a></li>
                </ul>         
          </nav>
        </div>
      </header>
      <style>

#demo {
    position: fixed;
    top: 8%;
    left: 0.1%;
    width: 50%;
    color: black;
    background-color: lightblue;
    text-align: center;
    z-index: 1000;
}
#nemo {
    position: fixed;
    top: 8%;
    left: 0.1%;
    width: 50%;
    color: black;
    background-color: red;
    text-align: center;
    z-index: 1000;
}
input[name=qun]:disabled {
    pointer-events: none;
    background-color: white;
   }
      </style>