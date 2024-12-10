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

    <!-- <h1 class="page-header">Dashboard</h1> -->

    <ol class="breadcrumb">
      <!-- breadcrumb Starts -->

      <li class="active">

        <i class="fa fa-dashboard"></i> Dashboard

      </li>

    </ol><!-- breadcrumb ends -->

  </div><!-- col-lg-12 ends -->

</div><!-- 1 row ends -->


<div class="row">
  <!-- 2 row Starts -->

  <div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-primary">
      <!-- panel panel-primary Starts -->

      <div class="panel-heading">
        <!-- panel-heading Starts -->

        <div class="row">
          <!-- panel-heading row Starts -->

          <div class="col-xs-3">
            <!-- col-xs-3 Starts -->

            <i class="fa fa-tasks fa-5x"> </i>

          </div><!-- col-xs-3 ends -->

          <div class="col-xs-9 text-right">
            <!-- col-xs-9 text-right Starts -->

            <div class="huge"> <?php echo $count_products; ?> </div>

          </div><!-- col-xs-9 text-right ends -->

        </div><!-- panel-heading row ends -->

      </div><!-- panel-heading ends -->

      <a href="index.php?view_products">

        <div class="panel-footer">
          <!-- panel-footer Starts -->

          <span class="pull-left">Products </span>

          <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

          <div class="clearfix"></div>

        </div><!-- panel-footer ends -->

      </a>

    </div><!-- panel panel-primary ends -->

  </div><!-- col-lg-3 col-md-6 ends -->


  <div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-green">
      <!-- panel panel-green Starts -->

      <div class="panel-heading">
        <!-- panel-heading Starts -->

        <div class="row">
          <!-- panel-heading row Starts -->

          <div class="col-xs-3">
            <!-- col-xs-3 Starts -->

            <i class="fa fa-comments fa-5x"> </i>

          </div><!-- col-xs-3 ends -->

          <div class="col-xs-9 text-right">
            <!-- col-xs-9 text-right Starts -->

            <div class="huge"> <?php echo $count_customers; ?> </div>

          </div><!-- col-xs-9 text-right ends -->

        </div><!-- panel-heading row ends -->

      </div><!-- panel-heading ends -->

      <a href="index.php?view_customers">

        <div class="panel-footer">
          <!-- panel-footer Starts -->

          <span class="pull-left"> Customers </span>

          <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

          <div class="clearfix"></div>

        </div><!-- panel-footer ends -->

      </a>

    </div><!-- panel panel-green ends -->

  </div><!-- col-lg-3 col-md-6 ends -->


  <div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-yellow">
      <!-- panel panel-yellow Starts -->

      <div class="panel-heading">
        <!-- panel-heading Starts -->

        <div class="row">
          <!-- panel-heading row Starts -->

          <div class="col-xs-3">
            <!-- col-xs-3 Starts -->

            <i class="fa fa-shopping-cart fa-5x"> </i>

          </div><!-- col-xs-3 ends -->

          <div class="col-xs-9 text-right">
            <!-- col-xs-9 text-right Starts -->

            <div class="huge"> <?php echo $count_p_categories; ?> </div>

          </div><!-- col-xs-9 text-right ends -->

        </div><!-- panel-heading row ends -->

      </div><!-- panel-heading ends -->

      <a href="index.php?view_p_cats">

        <div class="panel-footer">
          <!-- panel-footer Starts -->

          <span class="pull-left"> Products Categories </span>

          <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

          <div class="clearfix"></div>

        </div><!-- panel-footer ends -->

      </a>

    </div><!-- panel panel-yellow ends -->

  </div><!-- col-lg-3 col-md-6 ends -->


  <div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-red">
      <!-- panel panel-red Starts -->

      <div class="panel-heading">
        <!-- panel-heading Starts -->

        <div class="row">
          <!-- panel-heading row Starts -->

          <div class="col-xs-3">
            <!-- col-xs-3 Starts -->

            <i class="fa fa-support fa-5x"> </i>

          </div><!-- col-xs-3 ends -->

          <div class="col-xs-9 text-right">
            <!-- col-xs-9 text-right Starts -->

            <div class="huge"> <?php echo $count_total_orders; ?> </div>

          </div><!-- col-xs-9 text-right ends -->

        </div><!-- panel-heading row ends -->

      </div><!-- panel-heading ends -->

      <a href="index.php?view_orders">

        <div class="panel-footer">
          <!-- panel-footer Starts -->

          <span class="pull-left"> Orders </span>

          <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

          <div class="clearfix"></div>

        </div><!-- panel-footer ends -->

      </a>

    </div><!-- panel panel-red ends -->

  </div><!-- col-lg-3 col-md-6 ends -->


</div><!-- 2 row ends -->

<div class="row">
  <div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-success">
      <!-- panel panel-red Starts -->

      <div class="panel-heading">
        <!-- panel-heading Starts -->

        <div class="row">
          <!-- panel-heading row Starts -->

          <div class="col-xs-3">
            <!-- col-xs-3 Starts -->

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="50" height="50"
              style="margin-top: 12px;">
              <path
                d="M64 32C46.3 32 32 46.3 32 64v64c-17.7 0-32 14.3-32 32s14.3 32 32 32l0 32c-17.7 0-32 14.3-32 32s14.3 32 32 32l0 64v96c0 17.7 14.3 32 32 32s32-14.3 32-32V384h80c68.4 0 127.7-39 156.8-96H352c17.7 0 32-14.3 32-32s-14.3-32-32-32h-.7c.5-5.3 .7-10.6 .7-16s-.2-10.7-.7-16h.7c17.7 0 32-14.3 32-32s-14.3-32-32-32H332.8C303.7 71 244.4 32 176 32H64zm190.4 96H96V96h80c30.5 0 58.2 12.2 78.4 32zM96 192H286.9c.7 5.2 1.1 10.6 1.1 16s-.4 10.8-1.1 16H96V192zm158.4 96c-20.2 19.8-47.9 32-78.4 32H96V288H254.4z"
                fill="#ffffff" />
            </svg>

          </div><!-- col-xs-3 ends -->

          <div class="col-xs-9 text-right">
            <!-- col-xs-9 text-right Starts -->

            <div class="huge"> <?php echo $count_total_earnings ?> </div>


          </div><!-- col-xs-9 text-right ends -->

        </div><!-- panel-heading row ends -->

      </div><!-- panel-heading ends -->

      <a href="index.php?view_orders">

        <div class="panel-footer">
          <!-- panel-footer Starts -->

          <span class="pull-left"> Earnings </span>

          <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

          <div class="clearfix"></div>

        </div><!-- panel-footer ends -->

      </a>

    </div><!-- panel panel-red ends -->

  </div><!-- col-lg-3 col-md-6 ends -->


  <div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-warning">
      <!-- panel panel-red Starts -->

      <div class="panel-heading">
        <!-- panel-heading Starts -->

        <div class="row">
          <!-- panel-heading row Starts -->

          <div class="col-xs-3">
            <!-- col-xs-3 Starts -->

            <i class="fa fa-spinner fa-5x"> </i>

          </div><!-- col-xs-3 ends -->

          <div class="col-xs-9 text-right">
            <!-- col-xs-9 text-right Starts -->

            <div class="huge"> <?php echo $count_pending_orders ?> </div>


          </div><!-- col-xs-9 text-right ends -->

        </div><!-- panel-heading row ends -->

      </div><!-- panel-heading ends -->

      <a href="index.php?view_orders">

        <div class="panel-footer">
          <!-- panel-footer Starts -->

          <span class="pull-left">Pending Orders </span>

          <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

          <div class="clearfix"></div>

        </div><!-- panel-footer ends -->

      </a>

    </div><!-- panel panel-red ends -->

  </div><!-- col-lg-3 col-md-6 ends -->



  <div class="col-lg-3 col-md-6">
    <!-- col-lg-3 col-md-6 Starts -->

    <div class="panel panel-info">
      <!-- panel panel-red Starts -->

      <div class="panel-heading">
        <!-- panel-heading Starts -->

        <div class="row">
          <!-- panel-heading row Starts -->

          <div class="col-xs-3">
            <!-- col-xs-3 Starts -->

            <i class="fa fa-check fa-5x"> </i>

          </div><!-- col-xs-3 ends -->

          <div class="col-xs-9 text-right">
            <!-- col-xs-9 text-right Starts -->

            <div class="huge"> <?php echo $count_completed_orders ?> </div>


          </div><!-- col-xs-9 text-right ends -->

        </div><!-- panel-heading row ends -->

      </div><!-- panel-heading ends -->

      <a href="index.php?view_orders">

        <div class="panel-footer">
          <!-- panel-footer Starts -->

          <span class="pull-left"> Completed Orders </span>

          <span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

          <div class="clearfix"></div>

        </div><!-- panel-footer ends -->

      </a>

    </div><!-- panel panel-red ends -->

  </div><!-- col-lg-3 col-md-6 ends -->

</div>

<div class="row">
  <!-- 3 row Starts -->

  <div class="col-lg-12">
    <!-- col-lg-8 Starts -->

    <div class="panel panel-primary">
      <!-- panel panel-primary Starts -->

      <div class="panel-heading">
        <!-- panel-heading Starts -->

        <h3 class="panel-title">
          <!-- panel-title Starts -->

          New Orders

        </h3><!-- panel-title ends -->

      </div><!-- panel-heading ends -->

      <div class="panel-body">
        <!-- panel-body Starts -->

        <div class="table-responsive">
          <!-- table-responsive Starts -->

          <table class="table table-bordered table-hover table-striped">
            <!-- table table-bordered table-hover table-striped Starts -->

            <thead>
              <!-- thead Starts -->

              <tr>
                <th>Order #</th>
                <th>Customer</th>
                <th>Invoice No</th>
                <th>Product ID</th>
                <th>Qty</th>
                <th>Status</th>


              </tr>

            </thead><!-- thead ends -->

            <tbody>
              <!-- tbody Starts -->

              <?php

$i = 0;

$get_order = "select * from pending_orders order by 1 DESC LIMIT 0,5";
$run_order = mysqli_query($con,$get_order);

while($row_order=mysqli_fetch_array($run_order)){


$order_id = $row_order['order_id'];

$c_id = $row_order['customer_id'];

$invoice_no = $row_order['invoice_no'];

$product_id = $row_order['product_id'];

$qty = $row_order['qty'];

$size = $row_order['size'];

$order_status = $row_order['order_status'];


$i++;

?>

              <tr>

                <td><?php echo $i; ?></td>

                <td>
                  <?php

$get_customer = "select * from customers where customer_id='$c_id'";
$run_customer = mysqli_query($con,$get_customer);
$row_customer = mysqli_fetch_array($run_customer);
$customer_email = $row_customer['customer_email'];
echo $customer_email;
?>
                </td>

                <td><?php echo $invoice_no; ?></td>
                <td><?php echo $product_id; ?></td>
                <td><?php echo $qty; ?></td>
                <td>
                  <?php
if($order_status=='pending'){

echo $order_status='pending';

}
else {

echo $order_status='Complete';

}

?>
                </td>

              </tr>

              <?php } ?>

            </tbody><!-- tbody ends -->


          </table><!-- table table-bordered table-hover table-striped ends -->

        </div><!-- table-responsive ends -->

      </div><!-- panel-body ends -->

      <a href="index.php?view_orders" class="view-all-orders">
        View All Orders <i class="fa fa-arrow-circle-right"></i>
      </a>


    </div><!-- panel panel-primary ends -->

  </div><!-- col-lg-8 ends -->
</div><!-- 3 row ends -->

<?php } ?>