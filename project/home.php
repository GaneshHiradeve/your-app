<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Thread 2 Thread</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="css1/mycss1.css" rel="stylesheet">

</head>
<body>
   
<?php include 'header.php'; ?>
<div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/certificates/test1.png"><img src="https://img.freepik.com/free-psd/smart-watch-sale-facebook-cover-web-banner-template_571050-317.jpg?w=2000" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/certificates/test2.png"><img src="https://imageengine.victorinox.com/medias/?context=bWFzdGVyfHJvb3R8OTc5NDF8aW1hZ2UvanBlZ3xoMjkvaGQ4LzEzNTE5MTQyNzQ4MTkwL25hdi1jYXJwZXQtd2F0LW1hdmVyaWNrLTY0MHgzNTAuanBnfDU1OGRlNzRmNjE5ZGEzNWI3MjlhN2I3ZWYxNmYzNzZhNDM0MGIwZDI4YTdmZjM0NTVlN2YwNDVlOWRiZTE1YjM" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/certificates/part.png"><img src="https://www.dealsfreak.com/wp-content/uploads/2017/08/SPYKAR-CLOTHING.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/certificates/c++.png"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUZU7XelVkqfJSYrbApUfhb52gc_BiwLLaW_gDTxiPajSXveNG6mkTK8ercg1qyG_P08s&usqp=CAU" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/certificates/dsa.png"><img src="https://i.ytimg.com/vi/EGZPwKmWbHs/maxresdefault.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/certificates/flip.png"><img src="https://www.shiddat.com/image/catalog/banner-2020/mens-collection-mobile.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/certificates/gold.png"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4IH87OtaSRUK9WGWPOQZdlFkOP-8vfxaOBSR-LHUndPz8BY4UJ76uBVIW4O8jHVqBhDE&usqp=CAU" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/certificates/gfg.png"><img src="https://dcassetcdn.com/design_img/3080524/692461/692461_17033936_3080524_8a112bc6_image.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/certificates/html.png"><img src="https://www.reliancedigital.in/medias/Apple-Watch-Series-8-Buy-now-CLP-Banner-15-09-2022-Mobile.jpg?context=bWFzdGVyfGltYWdlc3w4NzMyOXxpbWFnZS9qcGVnfGltYWdlcy9oYWQvaGM3Lzk5MDc1MDQ3NDI0MzAuanBnfDY3ZWZhOTI1YTBkODY0OWZjMjQwYTYzNmRmYmY0NmE0MGI3ODRkOTFmNTcxMTg4NDA2NzFkOTg5MjMwYTQ0YTA&w=412&h=232" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/certificates/Forage.png"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTo2ihlaDan7B0_cQP1BQGYs04xV65OWiP9GmDGJFt8zeM5mEnhwiM4yLMNMg5r_tkIzLQ&usqp=CAU" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/certificates/great.png"><img src="head.jpg" class="img-fluid" alt=""></a></div>
          </div>
          
        </div>




<section class="home">




   <div class="content">
      <h3>PROGRESS WITH EVERY PURCHASE</h3>
      <p>With every purchase 1% of your payments will be funded for the Homeless and Orphans.</p>
      <p>So, shop for the best and do join the social chain.</p>
      <!-- <a href="about.php" class="white-btn"></a> -->
      <a  class="white-btn" href="shop.php"> SHOP NOW</a>

   </div>

</section>





<section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>WATCHES</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>JEANS</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>T-SHIRTS</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>SHOES</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p>TRENDING</p>
              <h3>WATCHES</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/watcht-removebg-preview.png" class="glightbox"><img src="assets/img/menu/watcht-removebg-preview.png" class="menu-img img-fluid" alt=""></a>
                <h4>TITAN</h4>
                <p class="ingredients">
                  Mechanical watch
                </p>
                <p class="price">
                  ₹7899
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/watchg-removebg-preview.png" class="glightbox"><img src="assets/img/menu/watchg-removebg-preview.png" class="menu-img img-fluid" alt=""></a>
                <h4>G-SHOCK</h4>
                <p class="ingredients">
                  MILITARY DIGITAL DIAL
                </p>
                <p class="price">
                  ₹8299
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/fw1.png" class="glightbox"><img src="assets/img/menu/fw1.png" class="menu-img img-fluid" alt=""></a>
                <h4>FASTRACK</h4>
                <p class="ingredients">
                 GREEN ANALOGUE DIAL
                </p>
                <p class="price">
                  ₹5999
                </p>
              </div><!-- Menu Item -->

          
            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              <p>LATEST</p>
              <h3>JEANS</h3>
            </div>

            <div class="row gy-5">

              

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/pant1.png" class="glightbox"><img src="assets/img/menu/pant1.png" class="menu-img img-fluid" alt=""></a>
                <h4>LEVIS</h4>
                <p class="ingredients">
                  JEAN JOGGERS
                </p>
                <p class="price">
                  ₹1599
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="aassets/img/menu/pant2.png" class="glightbox"><img src="assets/img/menu/pant2.png" class="menu-img img-fluid" alt=""></a>
                <h4>KILLER</h4>
                <p class="ingredients">
                 STRETCHABLE BLUE JEAN
                </p>
                <p class="price">
                  ₹1399
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/pant3.png" class="glightbox"><img src="assets/img/menu/pant3.png" class="menu-img img-fluid" alt=""></a>
                <h4>H&M</h4>
                <p class="ingredients">
                  LIGHT BLACK JOGGER
                </p>
                <p class="price">
                  ₹1999
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              <p>TRENDING</p>
              <h3>T-SHIRT</h3>
            </div>

            <div class="row gy-5">

            

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/ts1.png" class="glightbox"><img src="assets/img/menu/ts1.png" class="menu-img img-fluid" alt=""></a>
                <h4>H&M</h4>
                <p class="ingredients">
                  STRIPED T-SHIRT
                </p>
                <p class="price">
                  ₹599
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/ts2.png" class="glightbox"><img src="assets/img/menu/ts2.png" class="menu-img img-fluid" alt=""></a>
                <h4>BONKERS</h4>
                <p class="ingredients">
                  RED DOTTED POLO-T
                </p>
                <p class="price">
                  ₹799
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/ts3.png" class="glightbox"><img src="assets/img/menu/ts3.png" class="menu-img img-fluid" alt=""></a>
                <h4>ZARA</h4>
                <p class="ingredients">
                  BLACK PRINTED T-SHIRT
                </p>
                <p class="price">
                ₹659
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              <p>LATEST</p>
              <h3>SHOES</h3>
            </div>

            <div class="row gy-5">

            

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/s1.png" class="glightbox"><img src="assets/img/menu/s1.png" class="menu-img img-fluid" alt=""></a>
                <h4>REBOOK</h4>
                <p class="ingredients">
                  GREY SPORT SHOES
                </p>
                <p class="price">
                  ₹2299
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/s2.png" class="glightbox"><img src="assets/img/menu/s2.png" class="menu-img img-fluid" alt=""></a>
                <h4>NIKE</h4>
                <p class="ingredients">
                 FUNKY AND CHUNKY
                </p>
                <p class="price">
                  ₹3499
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/s3.png" class="glightbox"><img src="assets/img/menu/s3.png" class="menu-img img-fluid" alt=""></a>
                <h4>PUMA</h4>
                <p class="ingredients">
                 WHITE SNEAKER
                </p>
                <p class="price">
                  ₹2999
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->


<!-- <section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
         
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia corporis ratione saepe sed adipisci?</p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </div>

</section> -->






<section id="stats-counter" class="stats-counter">
        <div class="container" data-aos="zoom-out">
  
          <div class="row gy-4">
  
            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="150000" data-purecounter-duration="1" class="purecounter"></span>
                <p>SATISFIED CUSTOMERS</p>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                <p>STARS GLOBAL RATING</p>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
                <p>HOURS OF SUPPORT</p>
              </div>
            </div><!-- End Stats Item -->
  
            <div class="col-lg-3 col-md-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
                <p>DAYS REPLACEMENT</p>
              </div>
            </div><!-- End Stats Item -->
  
          </div>
  
        </div>
      </section><!-- End Stats Counter Section -->





      <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>OUR  POPULAR  BRANDS</h2>
      
          <!-- <p><i class='bx bxs-chevron-right'></i>“Creativity is seeing the same thing but thinking differently.”</p> -->
        </div>

        <div class="row">
          

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="https://ak.picdn.net/shutterstock/videos/1034127644/thumb/9.jpg?ip=x480" class="img-fluid" alt="">
                <div class="social">
                  <!-- <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a> -->
                </div>
              </div>
              <div class="member-info">
                <h4></h4>
                <!-- <button class="button3" type="button">Let's Talk <i class="fa fa-comments-o" aria-hidden="true"></i> </button> -->
                <p> H&M product range also includes sportswear, underwear, cosmetics, accessories and shoes. H&M aims to be always up-to-date, mod- ern and relevant.
                </p>

              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="data:image/png;base64,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" class="img-fluid" alt="">
                <div class="social">
                  <!-- <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a> -->

                </div>
              </div>
              <div class="member-info">
                <!-- <h4>Change Text Case</h4> -->
                <p>As a specialist denim brand, Levi's price points are higher than some straight-to-market collections but the quality of the cuts and denim make them worth it if your budget can stretch.</p>

              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="data:image/jpeg;base64,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" class="img-fluid" alt="">
                <div class="social">
                  <!-- <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a> -->

                </div>
              </div>
              <div class="member-info">
                <!-- <h4>Number Convertor</h4> -->
                <p> Nike Air cushioning reduces the weight of the shoe without reducing performance. The lighter the shoe is, the less energy athletes put out during their performance. 
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="data:image/png;base64,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" class="img-fluid" alt="">
                <div class="social">
                  <!-- <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a> -->

                </div>
              </div>
              <div class="member-info">
                <!-- <h4>Portfolio</h4> -->
                <p>In the course of more than 70 years, PUMA has made history as a creator of fast product designs for the fastest athletes on the planet: We enhance sports such as football, running and training, golf, basketball and motorsports with performance and sport-inspired lifestyle products.
                  
                </p>
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Team Section -->

  
<section class="home-contact">
 
   <div class="content">
      <h3>Have any questions?</h3>
      <p>Easy refunds and easy returns within 7 days.</p>
      <a href="contact1.php" class="white-btn1">contact us</a>
   </div>

</section>











<?php include 'footer.php'; ?>

<!-- custom js file link  -->

     <!-- Vendor JS Files -->
     <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script src="js/script.js"></script>

</body>
</html>