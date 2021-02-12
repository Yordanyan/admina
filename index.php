<?php  
$db = mysqli_connect("localhost", "root", "", "store");
$sql = "SELECT * FROM products";
$result = mysqli_query($db, $sql);        
?>
<?php  
  while( $row = mysqli_fetch_assoc($result) );
  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>

    
    <title>FiJi's Store</title>
  </head>
  <body class="bg-light">
    <div class="container main-header">
    <div class="row bg-light justify-content-between align-content-center py-2">
        <div class="d-inline ">
    <div class="d-inline mr-5">
              <img src="https://w7.pngwing.com/pngs/207/981/png-transparent-van-delivery-logo-car-cargo-container-angle-van-truck.png" width="30px" height="30px"  class=""  title="cheap shipping" alt="index.php"> Worldwide shipping, reasonable rates
          </div>
    <div class="d-inline mr-5"><img src="https://logodix.com/logo/1649042.jpg" width="30px" height="auto" class="sprite sprite_0_icon_25years_020x015" style="vertical-align:middle;border:none;margin-right:3px;" title="25 years"> 25 Years In Shop</div>
    <!-- Image and text -->
    <div class="bg-light">
        <div class="row bg-light"> 
            <nav class="navbar navbar-light bg-light col-12">
            <p class="navbar-brand d-none d-md-block">
                <img src="https://i.pinimg.com/originals/cc/3b/1a/cc3b1ad8ca057a0854c32b4b5a70cac3.png" width="30px" height="30px"> +1 1564 1546
            </p>
    
            <p class="navbar-brand d-none d-md-block">
                 <img src="https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG37.png" width="30px" height="30px"> Welcome To Our Shop
            </p>
    
            <select  class="custom-select" style="width:250px; ">
                <option>AM</option>
                <option>RU</option>
                <option>EN</option>
            </select>
    
            <select class="custom-select" style="width: 250px;">
                <option>֏</option>
                <option>$</option>
                <option>$</option>
            </select>
    
            <button type="button" style="width: 150px;" class="btn btn-info d-none d-md-block">
                Notifications <span class=" bg-danger badge badge-light">7</span>
              </button>
          </nav>

    
          <nav class="navbar navbar-dark bg-light col-12">
            <a class="navbar-brand">
              <img src="https://i.pinimg.com/originals/db/b3/09/dbb309f39a2eae5dfeed4f95636c4b98.jpg" width="150px" height="auto">
            </a>
            <form class="form-inline my-2 my-lg-0 d-none d-md-block" >
                <input class="form-control mr-sm-2 " type="search" placeholder="Search A Bike's For You" style="width: 250px;" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Search</button>
              </form>

            
          <div class="btn-group dropdown col-4 col-lg-2 mt-2" role="group">
                      <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       My Account
                      </button>
                      <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                           <a class="dropdown-item" href="admin/items.php">Admin Panel</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#registerModal">Register</a>
                        <a class="dropdown-item" href="myaccount.php">My Account</a>
                        <a class="dropdown-item" href="myinfo.php">Account Settings</a>
                      </div>
                    </div>
          </nav>

          <nav class="navbar navbar-expand-lg navbar-light bg-light col-12">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
               <li>
                  <div class="dropdown" style="margin-left: 35px;">
                    <a class="nav-link " href="index.php" >
                      Home
                    </a>
                   
               </div>
              </li>

              <li>
                <div class="dropdown" style="margin-left: 35px;">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">SubCategory</a>
                    <a class="dropdown-item" href="#">SubCategory</a>
                    <a class="dropdown-item" href="#">SubCategory</a>
                  </div>
             </div>
            </li>
            <li>
              <div class="dropdown" style="margin-left: 35px;">
                <a class="nav-link " href="shop.php" >
                  Shop
                </a>
                
           </div>
          </li>
          <li>
            <div class="dropdown" style="margin-left: 35px;">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Card
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">SubCategory</a>
                <a class="dropdown-item" href="#">SubCategory</a>
                <a class="dropdown-item" href="#">SubCategory</a>
              </div>
         </div>
        </li>
        <li>
          <div class="dropdown" style="margin-left: 35px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Checkout
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">SubCategory</a>
              <a class="dropdown-item" href="#">SubCategory</a>
              <a class="dropdown-item" href="#">SubCategory</a>
            </div>
       </div>
      </li>
      <li>
        <div class="dropdown" style="margin-left: 35px;">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Settings
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">SubCategory</a>
            <a class="dropdown-item" href="#">SubCategory</a>
            <a class="dropdown-item" href="#">SubCategory</a>
          </div>
     </div>
    </li>

               
              </ul>
            </div>
          </nav>

      </div>
    </div>
<!-- Site  -->
    <div id="carouselExampleIndicators" class="carousel slide " style="height: 400px!important; width: 900px!important margin-right:100px!important;" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.hdwallpapers.in/download/mv_agusta_f4_rr_bike-HD.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="https://school298.spb.ru/images/600/DSC100645814.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://s1.1zoom.ru/b5050/225/356755-admin_1920x1080.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<!-- Site -->
     <div class="container mt-5">
  <div class="row">
    <div class="card col-12 col-md-4 col-lg-4 col-xlg-4  mt-5">
  <img src="https://smartlifefitness.com/wp-content/uploads/2019/06/A75-26%E2%80%B3-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Samsung</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
    <a href="product.php" class="btn btn-primary float-right">Buy Now</a>
    <br>

     <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['title']; ?></td>
      <form action="action.php" method="post">
      </form>

  </div>
</div>
    
         <div class="card col-12 col-md-4 col-lg-4 col-xlg-4 mt-5" style="size: 16rem!important">
  <img src="https://smartlifefitness.com/wp-content/uploads/2019/06/A75-26%E2%80%B3-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">BIKE</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
   <a href="product.php" class="btn btn-primary float-right">Buy Now</a>
  </div>
</div>
      <div class="card col-12 col-md-4 col-lg-4 col-xlg-4 mt-5">
  <img src="https://smartlifefitness.com/wp-content/uploads/2019/06/A75-26%E2%80%B3-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Samsung</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
 <a href="product.php" class="btn btn-primary float-right">Buy Now</a>
  </div>
</div>
   <br>
    <br>
    
<!--     Site cards -->
    
   <div class="container mt-5">
  <div class="row">
    <div class="card col-12 col-md-4 col-lg-4 col-xlg-4  mt-5">
  <img src="https://smartlifefitness.com/wp-content/uploads/2019/06/A75-26%E2%80%B3-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Samsung</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
   <a href="product.php" class="btn btn-primary float-right">Buy Now</a>
  </div>
</div>
    
         <div class="card col-12 col-md-4 col-lg-4 col-xlg-4 mt-5" style="size: 16rem!important">
  <img src="https://smartlifefitness.com/wp-content/uploads/2019/06/A75-26%E2%80%B3-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">BIKE</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<a href="product.php" class="btn btn-primary float-right">Buy Now</a>
  </div>
</div>
      <div class="card col-12 col-md-4 col-lg-4 col-xlg-4 mt-5">
  <img src="https://smartlifefitness.com/wp-content/uploads/2019/06/A75-26%E2%80%B3-2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Samsung</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
 <a href="product.php" class="btn btn-primary float-right">Buy Now</a>
  </div>
</div>
   <br>
    <br>
    

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content" style="background-color: #28b315">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-outline-dark">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>

              
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content" style="background-color: #28b315">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                 <label for="formGroupExampleInput">Name</label>
                   <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
              </div>
               <div class="form-group">
                  <label for="formGroupExampleInput2">Last Name</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Last Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1 " placeholder="Email addres" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-outline-dark">Regist</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 <!-- Footer -->
<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        
        
<a  class="font-weight-bold text-uppercase mt-3 mb-4" href="https://www.w3schools.com">Home</a>
       

      </div>
      <!-- Grid column -->
                                                                                       

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
                                 
        <a  class="font-weight-bold text-uppercase mt-3 mb-4" href="#">Contact Us</a>

        

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <a  class="font-weight-bold text-uppercase mt-3 mb-4" href="#">About</a>

        

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
       <a  class="font-weight-bold text-uppercase mt-3 mb-4" href="https://www.w3schools.com">PRIVACY POLICY</a>

        

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://www.facebook.com/profile.php?id=100012424834365"> FIJI</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  </body>
</html>