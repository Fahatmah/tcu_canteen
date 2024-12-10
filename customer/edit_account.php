<?php

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customer_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];

$customer_name = $row_customer['customer_name'];

$customer_email = $row_customer['customer_email'];

//$customer_country = $row_customer['customer_country'];

//$customer_city = $row_customer['customer_city'];

$customer_contact = $row_customer['customer_contact'];

//$c_stno = $_POST['c_stno'];
$customer_stno = $row_customer['customer_stno'];

// $customer_image = $row_customer['customer_image'];

?>
<div class="header">
  <h1> Edit Your Account </h1>
  <br>
</div>

<form action="" method="post" enctype="multipart/form-data" class="form_container">
  <!--- form Starts -->

  <div class="form-group">
    <!-- form-group Starts -->

    <label> Full Name: </label>

    <input type="text" name="c_name" class="form-control" required value="<?php echo $customer_name; ?>">


  </div><!-- form-group ends -->
<div class="form-group">
    <label> Student Num: </label>

    <input type="text" name="c_stno" class="form-control" required value="<?php echo $customer_stno; ?>">


  </div>
    
  <div class="form-group">
    <!-- form-group Starts -->

    <label> Email: </label>

    <input type="text" name="c_email" class="form-control" required value="<?php echo $customer_email; ?>">


  </div><!-- form-group ends -->

  <div class="form-group">
    <!-- form-group Starts -->

    <label>  Contact Number: </label>

    <input type="text" name="c_contact" class="form-control" required value="<?php echo $customer_contact; ?>">


  </div><!-- form-group ends -->

  <button name="update" class="btn btn-primary">

    <i class="fa fa-user-md"></i> Update Now

  </button>
  <div class="text-center">
    <!-- text-center Starts -->



  </div><!-- text-center ends -->


</form>
<!--- form ends -->

<?php

if(isset($_POST['update'])){

$update_id = $customer_id;

$c_name = $_POST['c_name'];

$c_email = $_POST['c_email'];

//$c_country = $_POST['c_country'];
$c_stno = $_POST['c_stno'];
//$c_city = $_POST['c_city'];

$c_contact = $_POST['c_contact'];

//$c_address = $_POST['c_address'];

$update_customer = "update customers set customer_name='$c_name',customer_email='$c_email',customer_contact='$c_contact' where customer_id='$update_id'";

$run_customer = mysqli_query($con,$update_customer);

if($run_customer){

echo "<script>alert('Your account has been updated please login again')</script>";

echo "<script>window.open('logout.php','_self')</script>";

}

}


?>