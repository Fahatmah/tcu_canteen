<?php
session_start();
include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");

// if(isset($_GET['c_id'])){
//   $customer_id = $_GET['c_id'];
// }

$session_email = $_SESSION['customer_email'];
$select_customer = "select * from customers where customer_email='$session_email'";
$run_customer = mysqli_query($con,$select_customer);
$row_customer = mysqli_fetch_array($run_customer);
$customer_id = $row_customer['customer_id'];

$ip_add = getRealUserIp();
$status = "pending";
$invoice_no = mt_rand();
$select_cart = "select * from cart where ip_add='$ip_add'";
$run_cart = mysqli_query($con,$select_cart);

while($row_cart = mysqli_fetch_array($run_cart)){
  $pro_id = $row_cart['p_id'];
  $pro_size = $row_cart['size'];
  $pro_name = $row_cart['p_name'];
  $pro_qty = $row_cart['qty'];
  $pro_manufacturer = $row_cart['p_manufacturer'];
  $sub_total = $row_cart['p_price']*$pro_qty;
  $insert_customer_order = "insert into customer_orders (customer_id,order_name,due_amount,invoice_no,qty,manufacturer_id,size,order_date,order_status) values ('$customer_id','$pro_name','$sub_total','$invoice_no','$pro_qty','$pro_manufacturer','$pro_size',NOW(),'$status')";

  $run_customer_order = mysqli_query($con,$insert_customer_order);

  $insert_pending_order = "insert into pending_orders (customer_id,invoice_no,product_id,product_name,qty,manufacturer_id,size,order_status) values ('$customer_id','$invoice_no','$pro_id','$pro_name','$pro_qty','$pro_manufacturer','$pro_size','$status')";
  $run_pending_order = mysqli_query($con,$insert_pending_order);
  $delete_cart = "delete from cart where ip_add='$ip_add'";
  $run_delete = mysqli_query($con,$delete_cart);
  echo "<script>alert('Your order has been submitted,Thanks ')</script>";
  echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
}