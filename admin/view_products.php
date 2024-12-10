<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>


<div class="row">
  <!--  1 row Starts -->

  <div class="col-lg-12">
    <!-- col-lg-12 Starts -->

    <ol class="breadcrumb">
      <!-- breadcrumb Starts -->

      <li class="active">

        <i class="fa fa-dashboard"></i> Dashboard / View Products

      </li>

    </ol><!-- breadcrumb ends -->

  </div><!-- col-lg-12 ends -->

</div><!--  1 row ends -->

<div class="row">
  <!-- 2 row Starts -->

  <div class="col-lg-12">
    <!-- col-lg-12 Starts -->

    <div class="panel panel-default">
      <!-- panel panel-default Starts -->

      <div class="panel-heading">
        <!-- panel-heading Starts -->

        <h3 class="panel-title">
          <!-- panel-title Starts -->

           View Products

        </h3><!-- panel-title ends -->


      </div><!-- panel-heading ends -->

      <div class="panel-body">
        <!-- panel-body Starts -->

        <div class="table-responsive">
          <!-- table-responsive Starts -->

          <table class="table table-bordered table-hover table-striped">
            <!-- table table-bordered table-hover table-striped Starts -->

            <thead>

              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Image</th>
                <th>Price</th>
                <th>Sold</th>
                <th>Keywords</th>
                <th>Date</th>
                <th>Delete</th>
                <th>Edit</th>



              </tr>

            </thead>

            <tbody>

              <?php

$i = 0;

$get_pro = "select * from products where status='product'";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['product_id'];

$pro_title = $row_pro['product_title'];

$pro_image = $row_pro['product_img1'];

$pro_price = $row_pro['product_price'];

$pro_keywords = $row_pro['product_keywords'];

$pro_date = $row_pro['date'];

$i++;

?>

              <tr>

                <td><?php echo $i; ?></td>

                <td><?php echo $pro_title; ?></td>

                <td><img src="product_images/food/<?php echo $pro_image; ?>" width="60" height="60"></td>

                <td>₱ <?php echo $pro_price; ?></td>

                <td>
                  <?php

$get_sold = "select * from pending_orders where product_id='$pro_id'";
$run_sold = mysqli_query($con,$get_sold);
$count = mysqli_num_rows($run_sold);
echo $count;
?>
                </td>

                <td> <?php echo $pro_keywords; ?> </td>

                <td><?php echo $pro_date; ?></td>

                <td class="button delete">

                  <a href="index.php?delete_product=<?php echo $pro_id; ?>">

                    <i class="fa fa-trash-o"> </i>

                  </a>

                </td>

                <td class="button edit">

                  <a href="index.php?edit_product=<?php echo $pro_id; ?>">

                    <i class="fa fa-pencil"> </i>

                  </a>

                </td>

              </tr>

              <?php } ?>


            </tbody>


          </table><!-- table table-bordered table-hover table-striped ends -->

        </div><!-- table-responsive ends -->

      </div><!-- panel-body ends -->

    </div><!-- panel panel-default ends -->

  </div><!-- col-lg-12 ends -->

</div><!-- 2 row ends -->




<?php } ?>