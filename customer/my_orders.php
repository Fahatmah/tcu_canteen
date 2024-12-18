<div class="header">
  <!-- center Starts -->
  <h1>My Orders</h1>
  <p class="lead"> Your orders on one place.</p>
</div><!-- center ends -->

<hr>

<div class="table-responsive">
  <!-- table-responsive Starts -->
  <table class="table table-bordered table-hover">
    <!-- table table-bordered table-hover Starts -->
    <thead>
      <!-- thead Starts -->
      <tr>
        <th>#</th>
        <th>Invoice</th>
        <th>Order Name</th>
        <th>Amount</th>
        <th>Qty</th>
        <th>Order Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead><!-- thead ends -->
    <tbody>
      <!--- tbody Starts --->
      <?php
      $customer_session = $_SESSION['customer_email'];
      $get_customer = "select * from customers where customer_email='$customer_session'";
      $run_customer = mysqli_query($con,$get_customer);
      $row_customer = mysqli_fetch_array($run_customer);
      $customer_id = $row_customer['customer_id'];
      $get_orders = "select * from customer_orders where customer_id='$customer_id' ORDER BY order_date DESC";
      $run_orders = mysqli_query($con,$get_orders);
      $i = 0;
      while($row_orders = mysqli_fetch_array($run_orders)){
          $order_id = $row_orders['order_id'];
          $due_amount = $row_orders['due_amount'];
          $invoice_no = $row_orders['invoice_no'];
          $order_name = $row_orders['order_name'];
          $qty = $row_orders['qty'];
          $size = $row_orders['size'];
          $order_date = substr($row_orders['order_date'],0,11);
          $order_status = $row_orders['order_status'];
          $i++;
          if($order_status=='pending'){
              $order_status_display = "<b style='color:red;'>Unpaid</b>";
              $action_button = "<a href='confirm.php?order_id=$order_id' class='btn btn-success btn-xs'> Confirm If Paid </a>";
          } else {
              $order_status_display = "<b style='color:green;'>Paid</b>";
              $action_button = "<button class='btn btn-secondary btn-xs' disabled  style='color:green; font-weight: bold'>Confirmed</button>";
          }
      ?>
      <tr>
        <!-- tr Starts -->
        <th><?php echo $i; ?></th>
        <td><?php echo $invoice_no; ?></td>
        <td><?php echo $order_name; ?></td>
        <td>₱<?php echo $due_amount; ?></td>
        <td><?php echo $qty; ?></td>
        <td><?php echo $order_date; ?></td>
        <td><?php echo $order_status_display; ?></td>
        <td><?php echo $action_button; ?></td>
      </tr><!-- tr ends -->
      <?php } ?>
    </tbody>
    <!--- tbody Ends --->
  </table><!-- table table-bordered table-hover ends -->
</div><!-- table-responsive ends -->