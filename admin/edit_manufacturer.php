<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['edit_manufacturer'])){

$edit_manufacturer = $_GET['edit_manufacturer'];

$get_manufacturer = "select * from manufacturers where manufacturer_id='$edit_manufacturer'";

$run_manufacturer = mysqli_query($con,$get_manufacturer);

$row_manufacturer = mysqli_fetch_array($run_manufacturer);

$m_id = $row_manufacturer['manufacturer_id'];

$m_title = $row_manufacturer['manufacturer_title'];

$m_contact = $row_manufacturer['contact'];

//$m_top = $row_manufacturer['manufacturer_top'];



}


?>

<div class="row">
  <!-- 1 row Starts -->

  <div class="col-lg-12">
    <!-- col-lg-12 Starts -->

    <ol class="breadcrumb">
      <!-- breadcrumb Starts -->

      <li class="active">

        <i class="fa fa-dashboard"></i> Dashboard / Edit Manufacturer

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

          Edit Manufacturer

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

              <input type="text" name="manufacturer_name" class="form-control" value="<?php echo $m_title; ?>">

            </div>

          </div><!-- form-group ends -->

          <div class="form-group">
            <!-- form-group Starts -->

            <label class="col-md-3 control-label"> Manufacturer Contact Number </label>

            <div class="col-md-6">

              <input type="text" name="manufacturer_contact" class="form-control" value="<?php echo $m_contact; ?>">

            </div>

          </div><!-- form-group ends -->

          <!-- form-group ends -->

          <div class="form-group">
            <!-- form-group Starts -->

            <label class="col-md-3 control-label"> </label>

            <div class="col-md-6">

              <input type="submit" name="update" class="form-control btn btn-primary" value=" Update Manufacturer ">

            </div>

          </div><!-- form-group ends -->

        </form><!-- form-horizontal ends -->

      </div><!-- panel-body ends -->

    </div><!-- panel panel-default ends -->

  </div><!-- col-lg-12 ends -->

</div><!-- 2 row ends -->

<?php

if(isset($_POST['update'])){

$manufacturer_name = $_POST['manufacturer_name'];

$contact = $_POST['manufacturer_contact'];

//$manufacturer_top = $_POST['manufacturer_top'];

$update_manufacturer = "update manufacturers set manufacturer_title='$manufacturer_name',contact='$contact', where manufacturer_id='$m_id'";

$run_manufacturer = mysqli_query($con,$update_manufacturer);

if($run_manufacturer){

echo "<script>alert('Manufacturer Has Been Updated')</script>";

echo "<script>window.open('index.php?view_manufacturers','_self')</script>";

}}

}

?>