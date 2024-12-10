<?php

session_start();

if(!isset($_SESSION['customer_email'])){
    echo "<script>window.open('../checkout.php','_self')</script>";
} else {
    include("includes/db.php");
    include("../includes/header.php");
    include("functions/functions.php");
    include("includes/main.php");
?>

<main>
  <div class="header user_header">
    <h1 class="heading">My Account</h1>
  </div>
  <div id="content" class="account_container">
    <!-- content Starts -->
    <div class="account">
      <!-- container Starts -->

      <div class="group">

        <div class="sidebar">
          <?php include("includes/sidebar.php"); ?>
        </div>

        <div class="orders">
          <div class="box">
            <!-- box Starts -->
            <?php
                    
                    if(isset($_GET['my_orders'])){
                        include("my_orders.php");
                    }
                    if(isset($_GET['pay_offline'])) {
                        include("pay_offline.php");
                    }
                    if(isset($_GET['edit_account'])) {
                        include("edit_account.php");
                    }
                    if(isset($_GET['change_pass'])){
                        include("change_pass.php");
                    }
                    if(isset($_GET['delete_account'])){
                        include("delete_account.php");
                    }
                    // if(isset($_GET['my_wishlist'])){
                    //     include("my_wishlist.php");
                    // }
                    if(isset($_GET['delete_wishlist'])){
                        include("delete_wishlist.php");
                    }
                    ?>
          </div><!-- box ends -->
        </div>
      </div>

    </div><!-- container ends -->
  </div><!-- content ends -->
</main>

<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php } ?>