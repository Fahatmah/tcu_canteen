<div class="box form_container">
  <!-- box Starts -->

  <div class="box_wrapper">

    <div class="box-header">
      <!-- box-header Starts -->

      <h1>Login</h1>

    </div>
    <!-- box-header ends -->

    <form action="checkout.php" method="post">
      <!--form Starts -->

      <div class="form-group">
        <!-- form-group Starts -->

        <label>Email</label>

        <input type="text" class="form-control" name="c_email" required>

      </div>
      <!-- form-group ends -->

      <div class="form-group">
        <!-- form-group Starts -->

        <label>Password</label>

        <input type="password" class="form-control" name="c_pass" required>


      </div>
      <!-- form-group ends -->

      <div class="text-center">
        <!-- text-center Starts -->
        <div class="group">
          <a href="customer_register.php">Don't have an account? Signup</a>
          <a href="forgot_pass.php"> Forgot Password </a>
        </div>
        <button name="login" value="Login" class="btn btn-primary">
          <i class="fa fa-sign-in"></i> Log in
        </button>
      </div>
      <!-- text-center ends -->


    </form>
    <!--form ends -->

    <center>
      <!-- center Starts -->




    </center>
    <!-- center ends -->
  </div>

</div>
<!-- box ends -->

<?php
if (isset($_POST['login'])) {
    $customer_email = mysqli_real_escape_string($con, $_POST['c_email']);
    $customer_pass = mysqli_real_escape_string($con, $_POST['c_pass']);

    //$select_customer = "SELECT * FROM customers WHERE customer_stno='$customer_email'";
    $select_customer = "SELECT * FROM customers WHERE customer_email='$customer_email'";
    $run_customer = mysqli_query($con, $select_customer);
    $check_customer = mysqli_num_rows($run_customer);

    if ($check_customer == 0) {
        echo "<script>alert('Student is not registered')</script>";
        exit();
    }

    $row_customer = mysqli_fetch_assoc($run_customer);
    if (!password_verify($customer_pass, $row_customer['customer_pass'])) {
        echo "<script>alert('Password is incorrect')</script>";
        exit();
    }

    $get_ip = getRealUserIp();
    $select_cart = "SELECT * FROM cart WHERE ip_add='$get_ip'";
    $run_cart = mysqli_query($con, $select_cart);
    $check_cart = mysqli_num_rows($run_cart);

    $_SESSION['customer_email'] = $row_customer['customer_email'];

    if ($check_cart == 0) {
        echo "<script>alert('You are logged in')</script>";
        echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
    } else {
        echo "<script>alert('You are logged in')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    }
}
?>


<?php

// if (isset($_POST['login'])) {

//     $customer_email = $_POST['c_email'];

//     $customer_pass = $_POST['c_pass'];

//     $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";

//     $run_customer = mysqli_query($con, $select_customer);

//     $get_ip = getRealUserIp();

//     $check_customer = mysqli_num_rows($run_customer);

//     $select_cart = "select * from cart where ip_add='$get_ip'";

//     $run_cart = mysqli_query($con, $select_cart);

//     $check_cart = mysqli_num_rows($run_cart);

//     if ($check_customer == 0) {

//         echo "<script>alert('password or email is wrong')</script>";

//         exit();
//     }

//     if ($check_customer == 1 AND $check_cart == 0) {

//         $_SESSION['customer_email'] = $customer_email;

//         echo "<script>alert('You are Logged In')</script>";

//         echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

//     } else {

//         $_SESSION['customer_email'] = $customer_email;

//         echo "<script>alert('You are Logged In')</script>";

//         echo "<script>window.open('checkout.php','_self')</script>";

//     }
// }

?>