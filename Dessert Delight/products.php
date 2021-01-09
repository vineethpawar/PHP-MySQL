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
    <title>Dessert Delight | Desserts</title>

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
      <nav class="navbar navbar-expand-lg" >
        <div class="container">
          <a class="navbar-brand" ><img src="./assets/images/logo.svg"   alt="Logo"><h2 id="home">DESSERT <em>DELIGHT</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="products.php">Desserts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="btn" href="#">Sign Up</a>
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
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>Live the sweet life!</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-sm-2" >
            <div class="filters" >
              <ul>
                
                  <li class="active fl" data-filter="*">All Desserts</li>
                  
                
                  





                  <?php $sql = "SELECT * from category";
                    $query = $dbh->prepare($sql);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    
                    if($query->rowCount() > 0)
                    {
                    foreach($results as $result)
                    {	?>
                          <li class="fl"data-filter=".<?php echo htmlentities($result->category_name);?>"><?php echo htmlentities($result->category_name);?></li>

                    <?php }} ?>







              </ul>
            </div>
          </div>
          <div class="mx-auto col-sm-10  " style="">
           <div class="filters-content">

                <div class="row grid">





                <?php $sql = "SELECT * from product";
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
          
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="./assets/images/logo.svg" alt="">
            <div class="inner-content">
              <p class="">Copyright &copy; 2020 Desert Delight | Made by <a href="https://www.linkedin.com/in/vineethpawar/" target="_blank">Vineeth Pawar R</a> & <a  href="https://www.linkedin.com/in/sarveshwaran-s-7b5656149/" target="_blank">Sarveshwaran S</a> </p>
            
           
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
    </script>
    <script>ttt();
      </script>

  </body>

</html>
