<?php include 'layout/header.php'; ?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Service</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Add</li>
          <li class="breadcrumb-item active">Service</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Service Information</h5>

              <!-- Vertical Form -->
              <form class="row g-3" method="post" action="Bcode/product1.php" enctype="multipart/form-data">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Mess/PG Name</label>
                  <input type="text" name="mess_name" class="form-control" id="inputNanme4" placeholder="Enter Mess/PG Name">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Category</label>
                  <input type="text" name="category" class="form-control" id="inputEmail4" placeholder="Enter Category">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Service Price</label>
                  <input type="number"  name="tiffin_price" class="form-control" id="inputPassword4" placeholder="Enter Service Price">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Mess/PG Image</label>
                  <input type="file" name="tiffin_img" class="form-control" id="inputAddress" >
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

         

        </div>
      </div>
    </section>

    

  </main><!-- End #main -->


<?php include 'layout/footer.php'; ?>