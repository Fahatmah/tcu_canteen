<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<div class="row">
  <!-- 1 row Starts -->

  <div class="col-lg-12">
    <!-- col-lg-12 Starts -->

    <ol class="breadcrumb">
      <!-- breadcrumb Starts -->

      <li class="active">

        <i class="fa fa-dashboard"></i> Dashboard / View Categories

      </li>

    </ol><!-- breadcrumb ends -->


  </div><!-- col-lg-12 ends -->

</div><!-- 1 row ends -->

<div class="row">
  <!-- 2 row Starts -->

  <div class="col-lg-12">
    <!-- col-lg-12 Starts -->

    <div class="panel panel-default">
      <!-- panel panel-default Starts -->

      <div class="panel-heading">
        <!-- panel-heading Starts -->

        <h3 class="panel-title">

           View Categories

        </h3>

      </div><!-- panel-heading ends -->

      <div class="panel-body">
        <!-- panel-body Starts -->

        <div class="table-responsive">
          <!-- table-responsive Starts -->

          <table class="table table-bordered table-hover table-striped">
            <!-- table-bordered table-hover table-striped Starts -->

            <thead>
              <!-- thead Starts -->

              <tr>

                <th>#</th>
                <th>Category Name</th>
                <th>Delete</th>
                <th>Edit</th>



              </tr>

            </thead><!-- thead ends -->

            <tbody>
              <!-- tbody Starts -->

              <?php 

$i=0;

$get_cats = "select * from categories";

$run_cats = mysqli_query($con,$get_cats);

while($row_cats = mysqli_fetch_array($run_cats)){

$cat_id = $row_cats['cat_id'];

$cat_title = $row_cats['cat_title'];


$i++;



?>

              <tr>

                <td><?php echo $i; ?></td>

                <td><?php echo $cat_title; ?></td>


                <td class="button delete">

                  <a href="index.php?delete_cat=<?php echo $cat_id; ?>">

                    <i class="fa fa-trash-o"></i>

                  </a>

                </td>

                <td class="button edit">

                  <a href="index.php?edit_cat=<?php echo $cat_id; ?>">

                    <i class="fa fa-pencil"></i>

                  </a>

                </td>

              </tr>


              <?php } ?>

            </tbody><!-- tbody ends -->

          </table><!-- table-bordered table-hover table-striped ends -->


        </div><!-- table-responsive ends -->

      </div><!-- panel-body ends -->

    </div><!-- panel panel-default ends -->

  </div><!-- col-lg-12 ends -->

</div><!-- 2 row ends -->


<?php } ?>