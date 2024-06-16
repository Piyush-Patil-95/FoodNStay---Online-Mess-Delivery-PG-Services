<?php include ("layout/header.php"); ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    
    <div class="container-fluid">
    <div class="row">
        <div class="col">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" style="height: 500px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Gallery/mess.jpg" class="d-block w-100 rounded-circle" alt="First Image" style="height: 500px;">
                    </div>
                    <div class="carousel-item">
                        <img src="Gallery/pg.jpg" class="d-block w-100 rounded-circle" alt="Second Image" style="height: 500px;">
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




        
   

  </main><!-- End #main -->
<?php include ("layout/footer.php"); ?>