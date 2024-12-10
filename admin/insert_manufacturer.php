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

        <i class="fa fa-dashboard"></i> Dashboard / Insert Manufacturer

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

          Insert Manufacturer

        </h3><!-- panel-title ends -->

      </div><!-- panel-heading ends -->

      <div class="panel-body">
        <!-- panel-body Starts -->

        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <!-- form-horizontal Starts -->

          <div class="form-group">
            <!-- form-group Starts -->

            <label class="col-md-3 control-label"> Manufacturer Name </label>

            <div class="col-md-6">

              <input type="text" name="manufacturer_name" class="form-control">

            </div>

          </div><!-- form-group ends -->

          <div class="form-group">
            <!-- form-group Starts -->

            <label class="col-md-3 control-label"> Manufacturer Contact </label>

            <div class="col-md-6">

              <input type="tel" name="contact" class="form-control">

            </div>

          </div><!-- form-group ends -->

          <div class="form-group">
            <!-- form-group Starts -->

            <label class="col-md-3 control-label"> </label>

            <div class="col-md-6">

              <input type="submit" name="submit" class="form-control btn btn-primary" value=" Insert Manufacturer ">

            </div>

          </div><!-- form-group ends -->

        </form><!-- form-horizontal ends -->

      </div><!-- panel-body ends -->

    </div><!-- panel panel-default ends -->

  </div><!-- col-lg-12 ends -->

</div><!-- 2 row ends -->

<?php

if(isset($_POST['submit'])){
  $manufacturer_name = $_POST['manufacturer_name'];
  $contact = $_POST['contact'];
  $insert_manufacturer = "insert into manufacturers (manufacturer_title,contact) values ('$manufacturer_name','$contact')";
  $run_manufacturer = mysqli_query($con,$insert_manufacturer);

  if($run_manufacturer){
    echo "<script>alert('New Manufacturer Has Been Inserted')</script>";
    echo "<script>window.open('index.php?view_manufacturers','_self')</script>";
  }
}

?>

<?php } ?>