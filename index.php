<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to FoodNStay</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

 
  <link href="assets/css/main.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        
        <img src="logo.png" alt="">
        <h1>FoodNStay<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#menu">Mess</a></li>
          <li><a href="#events">PG's</a></li>

          <li><a href="#gallery">Gallery</a></li>
          

          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->
      <?php 
      
      if(isset($_SESSION['role_id']) && $_SESSION['role_id'] == 1) {
      ?>
    
    <span  ><?php echo $_SESSION['uname']; ?></span>
    <a class="btn-book-a-table" href="logout.php">Logout</a>
    <?php } else { ?>
    <a class="btn-book-a-table" href="login.html">Log in</a>
    <?php } ?>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div
          class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Locate Your Healthy Food<br>And Rental PG</h2>
          <p data-aos="fade-up" data-aos-delay="100">Get the best Meal and Rental PG's Services on one Click!</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <img src="search.png" alt="" style="width: 50px; margin-right: 5px; height: auto;">
            <a href="#book-a-table" class="btn-book-a-table">Start Finding</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
              class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
                Video</span></a>
          </div>
        </div>
       


        <div class="col-lg-7 order-2 order-lg-1">
          <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Gallery/mess.jpg" class="d-block w-100 rounded-circle" alt="First Image">
              </div>
              <div class="carousel-item">
                <img src="Gallery/pg.jpg" class="d-block w-100 rounded-circle" alt="Second Image">
              </div>
              <!-- Add more carousel items as needed -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section><!-- End Hero Section -->



  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>About Us</h2>
          <p>Learn More <span>About Us</span></p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-7 position-relative about-img"
            style="background-image: url('Gallery/pg2.webp') ;background-repeat: no-repeat; background-size: 720px 500px; "
            data-aos="fade-up" data-aos-delay="150">
            <div class="call-us position-absolute">
              <h4>Call For Enquiry</h4>
              <p>+1 5589 55488 55</p>
            </div>
          </div>
          <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <p id="" class="fst-italic d-flex justify-content-center" style="text-align:justify">
                "Welcome to FoodNStay, where we blend the comforts of home with the delight of delicious meals. At
                FoodNStay, we take pride in curating an unmatched experience for those seeking quality Pay Guest
                accommodations and Food Services"
              </p>
              <ul>
                <li><i class="bi bi-check2-all"></i> Pay Guest Services:
                  Our rental PG services provide a home away from home. With a focus on comfort, safety, and
                  convenience, we offer meticulously designed PG accommodations that cater to the unique needs of
                  students and professionals. Experience a seamless transition to a new city with our thoughtfully
                  curated living spaces.</li>
                <li><i class="bi bi-check2-all"></i> Food Services:
                  Embark on a culinary journey with our exquisite food services. Our chefs craft delectable meals using
                  fresh, locally sourced ingredients. Whether you crave authentic regional flavors or international
                  cuisines, our diverse menu caters to every palate. Say goodbye to mundane meals and savor the joy of
                  dining at FoodNStay.</li>

              </ul>


              <div class="position-relative mt-4">
                <img src="Gallery/mess2.jpg" class="img-fluid" alt="" style="height: 358px; width: 478px;">
                <a href="https://youtu.be/r0gKEJTPS8Q?si=Hd_giA3r_jZfwfEd" class="glightbox play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why Choose FoodNStay?</h3>
              <p>
                At FoodNStay, we stand out as your premier destination for a seamless fusion of Best Food Services and
                Affordable Rental PG's. Choosing FoodNStay means embracing a lifestyle where culinary delight and homely
                comfort converge.
              </p>
              <div class="text-center">
                <a href="#menu" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-cookie"></i>
                  <h4>Veg/Non-Veg Food Services</h4>
                  <p>Veg-meals on Weekdays & Non-Veg meals on Weekends !</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-house"></i>
                  <h4>Hostels/PG's/Rooms</h4>
                  <p>1BHK/2BHK Rooms Available at Every Prime Location !</p>
                </div>
              </div><!-- End Icon Box -->



            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="74" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Food Services</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="41" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>PG's</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span>24/7</span>
              <p>Availability</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1452" data-purecounter-duration="1"
                class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
        <div class="tab-pane fade" id="menu-breakfast"></div>
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <h2>Our Services</h2>
            <p>Check Our Below <span>Mess</span></p>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              
                <img src="Gallery/mess01.avif" class="menu-img img-fluid" alt="" style="height: 239.18px; width: 415px;">
              
              
                <h4>Manapurva Mess</h4>
              
              <p class="ingredients">
                Cidco, Nashik
              </p>

            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              
                <img src="Gallery/mess02.avif" class="menu-img img-fluid" alt=""
                  style="height: 239.18px; width: 415px;">
              
                <h4>Chamunda Mess</h4>
              
              <p class="ingredients">
                Indira Nagar, Nashik
              </p>

            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <img src="Gallery/mess03.avif" class="menu-img img-fluid" alt=""
                  style="height: 239.18px; width: 415px;">
              
                <h4>Nashik Tadka Mess</h4>
              

              <p class="ingredients">
                Gangapur Road, Nashik
              </p>

            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <img src="Gallery/mess04.avif" class="menu-img img-fluid" alt=""
                  style="height: 239.18px; width: 415px;">
              
                <h4>Shinde Mess</h4>
              

              <p class="ingredients">
                Pawan Nagar, Nashik
              </p>

            </div>

            <div class="col-lg-4 menu-item">
              <img src="Gallery/mess05.avif" class="menu-img img-fluid" alt=""
                  style="height: 239.18px; width: 415px;">
              
                <h4>Gayatri Mess</h4>
              

              <p class="ingredients">
                College Road, Nashik
              </p>

            </div>

            <div class="col-lg-4 menu-item">
              <img src="Gallery/mess06.webp" class="menu-img img-fluid" alt=""
                  style="height: 239.18px; width: 415px;">
              
                <h4>Rahul Khanaval</h4>
              

              <p class="ingredients">
                Canada Corner, Nashik
              </p>

            </div>

            <div class="text-center" >
            <a class="btn-book-a-table "  href="dashboard.php">Place Your Order</a>
            </div>

          </div>
        </div><!-- End Breakfast Menu Content -->


        <div class="tab-pane fade" id="menu-lunch">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Lunch</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png"
                  class="menu-img img-fluid" alt=""></a>
              <h4>Magnam Tiste</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $5.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png"
                  class="menu-img img-fluid" alt=""></a>
              <h4>Aut Luia</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $14.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png"
                  class="menu-img img-fluid" alt=""></a>
              <h4>Est Eligendi</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $8.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png"
                  class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png"
                  class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png"
                  class="menu-img img-fluid" alt=""></a>
              <h4>Laboriosam Direva</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $9.95
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Lunch Menu Content -->

        <div class="tab-pane fade" id="menu-dinner">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Dinner</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png"
                  class="menu-img img-fluid" alt=""></a>
              <h4>Magnam Tiste</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $5.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png"
                  class="menu-img img-fluid" alt=""></a>
              <h4>Aut Luia</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $14.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png"
                  class="menu-img img-fluid" alt=""></a>
              <h4>Est Eligendi</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $8.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png"
                  class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png"
                  class="menu-img img-fluid" alt=""></a>
              <h4>Eos Luibusdam</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $12.95
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png"
                  class="menu-img img-fluid" alt=""></a>
              <h4>Laboriosam Direva</h4>
              <p class="ingredients">
                Lorem, deren, trataro, filede, nerada
              </p>
              <p class="price">
                $9.95
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Dinner Menu Content -->

      </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Testimonials Section ======= -->
    

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">

        <div class="section-header">
          
          <p>Get the <span>Best </span>Rooms at the <span>Best</span> Prices</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide event-item d-flex flex-column justify-content-end"
              style="background-image: url(Gallery/party1.jpg);text-align: justify; text-justify: inter-word;">
              <h3>Hostels</h3>
              <div class="price align-self-start">₹3500/-</div>
              <p class="description">
                Each hostel on FoodNStay is handpicked for friendly atmosphere, and commitment to delivering an good
                experience. Whether you're a solo adventurer, a backpacker, or a group of friends seeking
                budget-friendly options, we have the ideal hostel to suit your preferences.
              </p>
            </div><!-- End Event item -->



            <div class="swiper-slide event-item d-flex flex-column justify-content-end "
              style="background-image: url(Gallery/party2.jpg) ; text-align: justify; text-justify: inter-word;"
              
              >
              <h3>1BHK/2BHK Rooms</h3>
              <div class="price align-self-start">₹5500/-</div>
              <p class="description justify-content-end">
                Our 1/2 BHK rooms are thoughtfully designed to provide you with a warm and inviting space during your
                travels. Whether you're a solo adventurer, a couple seeking a romantic getaway, or a small family on
                vacation, our rooms offer the perfect blend of functionality and comfort.
              </p>
            </div><!-- End Event item -->

            <div class="swiper-slide event-item d-flex flex-column justify-content-end"
              style="background-image: url(Gallery/party3.jpg);text-align: justify; text-justify: inter-word">
              

              <h3>PG's</h3>
              <div class="price align-self-start" >₹6000/-</div>
              <p class="description">
                Our PGs are designed to provide a home away from home, offering a range of accommodation options.
                Whether you're a student, working professional, or someone relocating to a new city, FoodNStay ensures
                that you find the perfect PG accommodation to suit your lifestyle.
              </p>
            </div><!-- End Event item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->

    

    <!-- ======= Chefs Section ======= -->
    <!--<section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Chefs</h2>
          <p>Our <span>Proffesional</span> Chefs</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Master Chef</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum
                  exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div><!-- End Chefs Member

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Patissier</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis.
                  Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div><!-- End Chefs Member

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cook</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut
                  architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div><!-- End Chefs Member

        </div>

      </div>
    </section>End Chefs Section -->

   

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>gallery</h2>
          <p>Check <span>Our Gallery</span></p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="Gallery/g1.jpg"><img src="Gallery/g1.jpg" class="img-fluid"
                  alt="" ></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="Gallery/g4.jpg"><img src="Gallery/g4.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="Gallery/g2.jpg"><img src="Gallery/g2.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="Gallery/g5.jpg"><img src="Gallery/g5.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="Gallery/g3.jpg"><img src="Gallery/g3.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="Gallery/g6.jpeg"><img src="Gallery/g6.jpeg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="Gallery/g7.jpg"><img src="Gallery/g7.jpg" class="img-fluid"
                  alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery"
                href="Gallery/g8.jpg"><img src="Gallery/g8.jpg" class="img-fluid"
                  alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Contact</h2>
          <p>Need Help? <span>Contact Us</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3749.0662051649097!2d73.78536387505221!3d20.005735881399737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddeb4926ef9aad%3A0x70378515c26ceac8!2sInnovationsHub%20Services%20Private%20Limited!5e0!3m2!1sen!2sin!4v1704977321597!5m2!1sen!2sin"
            frameborder="0" allowfullscreen></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <p>
                  Bele Sankul, 4/5, Ghankar Ln<br>Ambedkar Colony, Raviwar Karanja<br>Panchavati, Nashik, Maharashtra 422001
              <br>
                </p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>innovationshub@gmail.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Opening Hours</h3>
                <p>
                  Mon-Sat: 10AM - 10PM<br>
              Sunday: Closed
                </p>
                
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Bele Sankul, 4/5, Ghankar Ln<br>Ambedkar Colony, Raviwar Karanja<br>Panchavati, Nashik, Maharashtra 422001
              <br>

            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> innovationshub@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 10AM</strong><strong>-10PM</strong><br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="https://twitter.com/InnovationsHubP" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/InnovationsHubServices" class="facebook"><i
                class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/innovationshub_services/" class="instagram"><i
                class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/company/innovationshub/" class="linkedin"><i
                class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FoodNStay</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="https://innovationshub.in//">InnovationsHub Services Pvt Ltd</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

 
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

 
  <script src="assets/js/main.js"></script>

</body>

</html>