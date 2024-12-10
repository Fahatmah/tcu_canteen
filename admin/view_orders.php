<?php
if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {
?>

<header>
  <style>
    .panel-heading{
      display: flex;
      justify-content: space-between;
    }
    .search_bar{
      background-color: #f9f9f9;
      padding: 5px;
      font-size: 16px;
      border: 1px solid gray;
      outline: none;
      border-radius: 3px;
    }
  </style>
</header>

<div class="row">
  <!-- 1 row Starts -->

  <div class="col-lg-12">
    <!-- col-lg-12 Starts -->

    <ol class="breadcrumb">
      <!-- breadcrumb Starts -->

      <li class="active">

        <i class="fa fa-dashboard"></i> Dashboard / View Orders

      </li>

    </ol><!-- breadcrumb ends -->

  </div><!-- col-lg-12 ends -->

</div><!-- 1 row ends -->

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">
          View Orders
        </h3>
        <div class="search_container">
          <input type="search" class="search_bar" name="search_bar" id="search_bar" placeholder="Search Here">
        </div>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Customer</th>
                <th>Invoice</th>
                <th>Product</th>
                <th>Qty</th>
                <th>Order Date</th>
                <th>Total Amount</th>
                <th>Status</th>
                <!-- <th>Action</th> -->
              </tr>
            </thead>
            <tbody>
              <?php
                                $i = 0;
                                $get_orders = "SELECT * FROM pending_orders";
                                $run_orders = mysqli_query($con, $get_orders);
                                while ($row_orders = mysqli_fetch_array($run_orders)) {
                                    $order_id = $row_orders['order_id'];
                                    $c_id = $row_orders['customer_id'];
                                    $invoice_no = $row_orders['invoice_no'];
                                    $product_id = $row_orders['product_id'];
                                    $qty = $row_orders['qty'];
                                    $size = $row_orders['size'];
                                    $order_status = $row_orders['order_status'];

                                    $get_products = "SELECT * FROM products WHERE product_id='$product_id'";
                                    $run_products = mysqli_query($con, $get_products);
                                    $row_products = mysqli_fetch_array($run_products);
                                    $product_title = $row_products['product_title'];

                                    $get_customer = "SELECT * FROM customers WHERE customer_id='$c_id'";
                                    $run_customer = mysqli_query($con, $get_customer);
                                    $row_customer = mysqli_fetch_array($run_customer);
                                    $customer_email = $row_customer['customer_email'];
                                    
                                    $get_customer_order = "SELECT * FROM customer_orders WHERE order_id='$order_id'";
                                    $run_customer_order = mysqli_query($con, $get_customer_order);
                                  
                                     if (!$run_customer_order) {
                                         mysqli_error($con);
                                     } else {
                                         if (mysqli_num_rows($run_customer_order) > 0) {
                                             $row_customer_order = mysqli_fetch_array($run_customer_order);
                                             // Debugging: Output the raw data
                                              //  var_dump($row_customer_order);
                                             // Format date
                                             $order_date = date("Y-m-d H:i:s", strtotime($row_customer_order['order_date']));
                                             // Cast due amount to integer
                                             $due_amount = (int)$row_customer_order['due_amount'];
                                         } else {
                                             $order_date = "N/A";
                                             $due_amount = 0;
                                         }
                                    }


                                    $i++;
                                ?>
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $customer_email; ?></td>
                <td style="color: white; font-weight: bold; background-color: var(--p-clr-100)"><?php echo $invoice_no; ?></td>
                <td><?php echo $product_title; ?></td>
                <td><?php echo $qty; ?></td>
                <td><?php echo $order_date; ?></td>
                <td>₱<?php echo $due_amount ?></td>
                <td><?php echo $order_status == 'pending' ? '<div style="color:red;">Pending</div>' : 'Completed'; ?>
                </td>
                <!-- <td class="button delete">
                  <a href="index.php?order_delete=<?php echo $order_id; ?>">
                    <i class="fa fa-trash-o"></i>
                  </a>
                </td> -->
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  document.getElementById('search_bar').addEventListener('input', function () {
    const filter = this.value.toLowerCase();
    const rows = document.querySelectorAll('tbody tr');
    
    rows.forEach(row => {
      const customer = row.cells[1].textContent.toLowerCase(); // Customer column
      const product = row.cells[3].textContent.toLowerCase(); // Product column

      if (customer.includes(filter) || product.includes(filter)) {
        row.style.display = ''; // Show row
      } else {
        row.style.display = 'none'; // Hide row
      }
    });
  });
</script>
<?php } ?>