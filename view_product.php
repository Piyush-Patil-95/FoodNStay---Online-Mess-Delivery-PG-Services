<?php include('layout/header.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>View Services</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active">Services</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Services</h5>
              

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Sr.no</th>
                    <th scope="col">Mess Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Tiffin Price</th>
                    <th scope="col">Tiffin Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include("Bcode/conn.php");
                    $count=1;
                    $querry="Select * from product_info1";

                    $result=mysqli_query($conn,$querry);
                    while($row=mysqli_fetch_assoc($result))
                    {
                    $id=$row['id'];
                  ?>
    
                  <tr>
                    <th scope="row"><?php echo $count; ?></th>
                    <td><?php echo $row['mess_name']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['tiffin_price']; ?></td>
                    <td><img src="./assets/product/<?php echo $row['tiffin_img']; ?>" height="70" width="70"></td>

                    <td>
                      <a href="edit_products.php?id=<?php echo $row['id'];?>"><i class="bi bi-pencil-square"></i></a>
                      <a href="delete_products.php?id=<?php echo $row['id'];?>"  onclick="return confirm('Are you sure you want to delete this Product?')"><i class="bi bi-trash"></i></a>

                    </td>

                   

                  </tr>

                  <?php $count++; } ?>
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    <?php mysqli_close($conn); ?>

  </main><!-- End #main -->

 <?php include('layout/footer.php'); ?>