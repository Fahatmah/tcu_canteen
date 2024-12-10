<?php

session_start();

if(!isset($_SESSION['customer_email'])){
    echo "<script>window.open('../checkout.php','_self')</script>";
} else {
    include("includes/db.php");
    include("includes/header.php");
    include("functions/functions.php");
    include("includes/main.php");

    if(isset($_GET['order_id'])){
        $order_id = $_GET['order_id'];
        $get_customer_order = "select * from customer_orders where order_id='$order_id'";
        $run_query = mysqli_query($con, $get_customer_order);
        $row_order = mysqli_fetch_array($run_query);
        // print_r($row_order); // Array
        $row_m_id = $row_order['manufacturer_id'];
        $get_manufacturer = "select * from manufacturers where manufacturer_id='$row_m_id'";
        $run_query = mysqli_query($con, $get_manufacturer);
        $row_manufacturer = mysqli_fetch_array($run_query);
    }
?>

<div class="confirm_payment_container">
  <!-- content Starts -->
  <div class="confirm_container">
    <!-- container Starts -->

    <h1> Please Confirm Your Payment </h1>

    <form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data">
      <!--- form Starts -->

      <div class="form-group" style="display: none;">
        <!-- form-group Starts -->
        <label>Invoice Number</label>
        <input type="text" value="<?php echo $row_order['invoice_no']; ?>" class="form-control" name="invoice_no" readonly>
      </div><!-- form-group ends -->

      <div class="form-group" style="display: none;">
          <!-- form-group Starts -->
          <label>Date</label>
          <input type="date" class="form-control" name="payment_date" id="payment_date" readonly>
      </div><!-- form-group ends -->

      <div class="form-group">
          <!-- form-group Starts -->
          <label>Order Name</label>
          <input type="text" value="<?php echo $row_order['order_name']; ?>" class="form-control" name="order_name" readonly>
      </div><!-- form-group ends -->


      <div class="form-group">
        <!-- form-group Starts -->
        <label>Stall Number</label>
        <input type="text" value="<?php echo $row_manufacturer['manufacturer_title']; ?>" class="form-control" name="stall_no" readonly>
      </div><!-- form-group ends -->

      <div class="form-group">
        <!-- form-group Starts -->
        <label>Stall Gcash #</label>
        <input type="tel" value="<?php echo $row_manufacturer['contact']; ?>" class="form-control" name="stall_gcash_no" readonly>
      </div><!-- form-group ends -->

      <div class="form-group">
        <!-- form-group Starts -->
        <label>Total Amount</label>
        <input type="number" value="<?php echo $row_order['due_amount']; ?>" class="form-control" name="amount_sent" readonly>
      </div><!-- form-group ends -->

      <div class="form-group">
        <!-- form-group Starts -->
        <label>Payment Method</label>
        <select class="form-control" name="payment_mode" id="payment_mode">
          <option value="GCASH">GCASH</option>
          <option value="PICK-UP">PICK-UP</option>
        </select>
      </div><!-- form-group ends -->

      <div class="text-center">
        <!-- text-center Starts -->
        <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">
          <i class="fa fa-user-md"></i> Confirm Payment
        </button>
      </div><!-- text-center ends -->

    </form>
    <!--- form ends -->

  </div><!-- container ends -->
</div><!-- content ends -->

<?php
// Calculate the due date (7 days from the current date)
$due_date = date('Y-m-d', strtotime('+7 days'));
?>

<?php include("includes/footer.php"); ?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
// $(function() {
//   // Get today's date
//   var today = new Date();
//   // Calculate the maximum allowed date (7 days from today)
//   var maxDate = new Date(today);
//   maxDate.setDate(today.getDate() + 7);
//   // Initialize Datepicker
//   $("#payment_date").attr("min", today.toISOString().split('T')[0]); // Start from today
//   $("#payment_date").attr("max", maxDate.toISOString().split('T')[0]); // Allow selection up to 7 days in the future
//   $("#payment_date").change(function() {
//     // Calculate and display due date information
//     var selectedDate = new Date($(this).val());
//     var dueDate = new Date(selectedDate);
//     dueDate.setDate(selectedDate.getDate() + 7); // Add 7 days
//     var dueDateString = dueDate.toISOString().split('T')[0];
//     $("#due_date_info").text("Due date: " + dueDateString);
//   });
// });
document.getElementById('payment_date').value = new Date().toISOString().slice(0, 10);
</script>

</body>

</html>

<?php } ?>

<?php

if (isset($_POST['confirm_payment'])) {
    $update_id = $_GET['update_id'];
    $invoice_no = $_POST['invoice_no'];
    $order_name = $_POST['order_name'];
    $amount = $_POST['amount_sent'];
    $payment_mode = $_POST['payment_mode'];
    $payment_date = $_POST['payment_date'];
    $stall_no = $_POST['stall_no'];
    $stall_gcash_no = $_POST['stall_gcash_no'];
    $complete = "Complete";
    $insert_payment = "INSERT INTO payments (invoice_no, order_name, amount, payment_mode, payment_date, stall_no, stall_gcash_no) VALUES ('$invoice_no','$order_name','$amount','$payment_mode','$payment_date', '$stall_no', '$stall_gcash_no')";
    $run_payment = mysqli_query($con, $insert_payment);
    $update_customer_order = "UPDATE customer_orders SET order_status='$complete' WHERE order_id='$update_id'";
    $run_customer_order = mysqli_query($con, $update_customer_order);
    $update_pending_order = "UPDATE pending_orders SET order_status='$complete' WHERE order_id='$update_id'";
    $run_pending_order = mysqli_query($con, $update_pending_order);
    if ($run_pending_order) {
        echo "<script>alert('Thank your ordering!')</script>";
        echo "<script>window.open('my_account.php?my_orders','_self')</script>";
    }
}

?>