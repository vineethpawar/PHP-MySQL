<?php

include('includes/config.php');

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/images/icon.png" type="image/x-icon">
    <title>Desert Delight</title>

    <!-- Bootstrap core CSS -->

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body id="body">

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" ><img src="./assets/images/logo.svg"  id="" alt="Logo"><h2 id="home">DESSERT <em>DELIGHT</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.php">Desserts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class=" btn" href="#">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="btn " id="toggle"><img src="./assets/images/moon1.svg" style="height:23px;" id="theme" alt=""></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel" >
        <div class="banner-item-01">
          <div class="text-content">
            <h1>sweetness overloaded</h4>
            <h2>Love at first bite</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h1>Freshly baked</h1>
            <h2>The home of fresh baking</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h1>Delectably delicious</h1>
            <h2>Where flavor’s and people meet</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 class="sh">Latest Products</h2>
              <a href="products.php">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>


          <?php $sql = "SELECT * from product order by id desc limit 6";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {	?>
                      

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 all <?php echo htmlentities($result->category_name);?>">
                     <div class="product-item">
                        <a href="#"><img src="assets/product/<?php echo htmlentities($result->img);?>" alt=""></a>
                        <div class="down-content">
                         <h4><?php echo htmlentities($result->name);?></h4>
                          <h6 class="price">₹ <?php echo htmlentities($result->price);?></h6>
                          <p class="pc"><?php echo htmlentities($result->description);?></p>
                          <a class="cart mr-3">Add to cart</a>
                          <span>Purchases (<?php echo htmlentities($result->purchases);?>)</span>
                        </div>
                      </div>
                    </div>




                <?php }} ?>


        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 class="sh">What we offer to our <span style="font-family:Georgia, 'Times New Roman', Times, serif;font-size: larger; font-weight: 400;">147</span> customers</h2>
            </div>
          </div>

          <div class="col-md-6">
            <div class="left-content">





              <h4>Come Experience The Taste Of Joy.</h4>
              <p class="pc">Dessert Delight offers you a home delivery service of freshly baked desserts right from our local franchise. Get 15% off on yout first order upto ₹ 200</p>
              <ul class="featured-list">
                <li><a href="#" class="fl">Home Delivery within 35 minutes</a></li>
                <li><a href="#" class="fl">Get 15% off on your first order</a></li>
                <li><a href="#" class="fl">Made with farm fresh ingredients</a></li>
         
                <li><a href="#" class="fl">All our ingredients are finest and handpicked</a></li>
              </ul>
              <a href="about.php" class="btn">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/inn.jpg" style="border-radius: 15px;" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Something Fresh &amp; Sweet For Everyone</h4>
                  <p>Get 15% off on yout first order upto ₹ 200.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="btn">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="./assets/images/logo.svg" alt="">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Desert Delight | Made by <a rel="nofollow noopener" href="https://www.linkedin.com/in/vineethpawar/" target="_blank">Vineeth Pawar R</a> & <a rel="nofollow noopener" href="https://www.linkedin.com/in/sarveshwaran-s-7b5656149/" target="_blank">Sarveshwaran S</a> </p>
            
           
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/toggle.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
       
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }

      
    </script>
<script>ttt();
  </script>

  </body>

</html>
