<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");


?>


<!-- Cover -->
<main>
  <div class="hero">
    <div class="heading">
      <div class="headers">
        <h4 class="sub-header">Welcome to the TCU Food Hall</h4>
        <h2>Fuel your <span class="word">body</span>, <br> <span>feed your <span class="word">mind</span>. <br> Grab a <span class="word">bite</span> and <br> enjoy the <span class="word">best</span> <br> <span class="word">meals on campus!</span></span></h2>
      </div>
      <a href="shop.php" class="btn1">Order here</a>
    </div>
  </div>
  <!-- Main -->
  
  <!-- FOOTER -->
  <footer class="footer_container">
    <div class="footer">

      <p class="copyright">
        &copy; <?php echo date("Y");?> TCU Canteen&trade;
      </p>

      <p class="group">Capstone 2 Project</p>

    </div>
  </footer>
  </body>

  </html>