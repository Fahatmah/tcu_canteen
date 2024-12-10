<?php
session_start();
include("includes/db.php");

if(!isset($_SESSION['admin_email'])){

  echo "<script>window.open('login.php','_self')</script>";

} else {

  $admin_session = $_SESSION['admin_email'];

  $get_admin = "select * from admins  where admin_email='$admin_session'";

  $run_admin = mysqli_query($con,$get_admin);

  $row_admin = mysqli_fetch_array($run_admin);

  $admin_id = $row_admin['admin_id'];

  $admin_name = $row_admin['admin_name'];

  $admin_email = $row_admin['admin_email'];

  $admin_image = $row_admin['admin_image'];

  //$admin_country = $row_admin['admin_country'];

  $admin_job = $row_admin['admin_job'];

  $admin_contact = $row_admin['admin_contact'];

  $admin_about = $row_admin['admin_about'];

  $get_products = "SELECT * FROM products";
  $run_products = mysqli_query($con,$get_products);
  $count_products = mysqli_num_rows($run_products);

  $get_customers = "SELECT * FROM customers";
  $run_customers = mysqli_query($con,$get_customers);
  $count_customers = mysqli_num_rows($run_customers);

  $get_p_categories = "SELECT * FROM product_categories";
  $run_p_categories = mysqli_query($con,$get_p_categories);
  $count_p_categories = mysqli_num_rows($run_p_categories);

  $get_total_orders = "SELECT * FROM customer_orders";
  $run_total_orders = mysqli_query($con,$get_total_orders);
  $count_total_orders = mysqli_num_rows($run_total_orders);

  $get_pending_orders = "SELECT * FROM customer_orders WHERE order_status='pending'";
  $run_pending_orders = mysqli_query($con,$get_pending_orders);
  $count_pending_orders = mysqli_num_rows($run_pending_orders);

  $get_completed_orders = "SELECT * FROM customer_orders WHERE order_status='Complete'";
  $run_completed_orders = mysqli_query($con,$get_completed_orders);
  $count_completed_orders = mysqli_num_rows($run_completed_orders);

  $get_total_earnings = "SELECT SUM( due_amount) as Total FROM customer_orders WHERE order_status = 'Complete'";
  $run_total_earnings = mysqli_query($con, $get_total_earnings);
  $row = mysqli_fetch_assoc($run_total_earnings);                       
  $count_total_earnings = $row['Total'];
?>


<!DOCTYPE html>
<html>

<head>

  <title>Admin Panel</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">

  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!--  -->
  <link rel="shortcut icon" href="" type="image/png">

</head>

<body>

  <div id="wrapper">
    <!-- wrapper Starts -->

    <?php include("includes/sidebar.php");  ?>

    <div id="page-wrapper">
      <!-- page-wrapper Starts -->

      <div class="container-fluid">
        <!-- container-fluid Starts -->
        <?php 
          $pages = array(
            'dashboard' => 'dashboard.php',
            'insert_product' => 'insert_product.php',
            'view_products' => 'view_products.php',
            'delete_product' => 'delete_product.php',
            'edit_product' => 'edit_product.php',
            'insert_p_cat' => 'insert_p_cat.php',
            'view_p_cats' => 'view_p_cats.php',
            'delete_p_cat' => 'delete_p_cat.php',
            'edit_p_cat' => 'edit_p_cat.php',
            'insert_cat' => 'insert_cat.php',
            'view_cats' => 'view_cats.php',
            'delete_cat' => 'delete_cat.php',
            'edit_cat' => 'edit_cat.php',
            'insert_slide' => 'insert_slide.php',
            'view_slides' => 'view_slides.php',
            'delete_slide' => 'delete_slide.php',
            'edit_slide' => 'edit_slide.php',
            'view_customers' => 'view_customers.php',
            'customer_delete' => 'customer_delete.php',
            'view_orders' => 'view_orders.php',
            'order_delete' => 'order_delete.php',
            'view_payments' => 'view_payments.php',
            'payment_delete' => 'payment_delete.php',
            'insert_user' => 'insert_user.php',
            'view_users' => 'view_users.php',
            'user_delete' => 'user_delete.php',
            'user_profile' => 'user_profile.php',
            'insert_box' => 'insert_box.php',
            'view_boxes' => 'view_boxes.php',
            'delete_box' => 'delete_box.php',
            'edit_box' => 'edit_box.php',
            'insert_term' => 'insert_term.php',
            'view_terms' => 'view_terms.php',
            'delete_term' => 'delete_term.php',
            'edit_term' => 'edit_term.php',
            'edit_css' => 'edit_css.php',
            'insert_manufacturer' => 'insert_manufacturer.php',
            'view_manufacturers' => 'view_manufacturers.php',
            'delete_manufacturer' => 'delete_manufacturer.php',
            'edit_manufacturer' => 'edit_manufacturer.php',
            'insert_icon' => 'insert_icon.php',
            'view_icons' => 'view_icons.php',
            'delete_icon' => 'delete_icon.php',
            'edit_icon' => 'edit_icon.php',
            'edit_contact_us' => 'edit_contact_us.php',
            'insert_enquiry' => 'insert_enquiry.php',
            'view_enquiry' => 'view_enquiry.php',
            'delete_enquiry' => 'delete_enquiry.php',
            'edit_enquiry' => 'edit_enquiry.php',
            'edit_about_us' => 'edit_about_us.php'
          );

          foreach ($pages as $param => $file) {
              if (isset($_GET[$param])) {
                  include($file);
                  break; // Stop further processing after including the first match
              }
          }
        ?>

      </div><!-- container-fluid ends -->

    </div><!-- page-wrapper ends -->

  </div><!-- wrapper ends -->

  <script src="js/jquery.min.js"></script>

  <script src="js/bootstrap.min.js"></script>


</body>


</html>

<?php } ?>