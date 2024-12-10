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

      <li>

        <i class="fa fa-dashboard"></i> Dashboard / Insert Category

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
          <!-- panel-title Starts -->

          Insert Category

        </h3><!-- panel-title ends -->

      </div><!-- panel-heading ends -->

      <div class="panel-body">
        <!-- panel-body Starts -->

        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <!-- form-horizontal Starts -->

          <div class="form-group">
            <!-- form-group Starts -->

            <label class="col-md-3 control-label">Category Title</label>

            <div class="col-md-6">

              <input type="text" name="cat_title" class="form-control" required>

            </div>

          </div><!-- form-group ends -->

          <div class="form-group">
            <!-- form-group Starts -->

            <label class="col-md-3 control-label"></label>

            <div class="col-md-6">

              <input type="submit" name="submit" value="Insert Category" class="btn btn-primary form-control">

            </div>

          </div><!-- form-group ends -->

        </form><!-- form-horizontal ends -->

      </div><!-- panel-body ends -->

    </div><!-- panel panel-default ends -->

  </div><!-- col-lg-12 ends -->

</div><!-- 2 row ends -->

<?php

if(isset($_POST['submit'])){
  $cat_title = $_POST['cat_title'];
  $insert_cat = "insert into categories (cat_title) values ('$cat_title')";
  $run_cat = mysqli_query($con,$insert_cat);

  if($run_cat){
    echo "<script> alert('New Category Has Been Inserted')</script>";
    echo "<script> window.open('index.php?view_cats','_self') </script>";
  }
}
?>

<?php } ?>