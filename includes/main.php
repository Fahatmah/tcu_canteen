</head>

<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
            <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Welcome,  Guest"; 
          }
          else
          { 
              echo "Welcome,  " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> items
          </a>
        </div>


        <ul class="login">

          <li class="login__item">
            <?php
              if(!isset($_SESSION['customer_email'])){
              echo '<a href="customer_register.php" class="login__link">Register</a>';
            } 
              else
              { 
                  echo '<a href="customer/my_account.php?my_orders" class="login__link">My Account</a>';
              }   
            ?>
          </li>


          <li class="login__item">
            <?php
            if(!isset($_SESSION['customer_email'])){
              echo '<a href="checkout.php" class="login__link">Sign In</a>';
            } 
              else
              { 
                  echo '<a href="./logout.php" class="login__link">Logout</a>';
              }   
            ?>

          </li>
        </ul>

      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline" style="width: 100%;">
      <div class="container clearfix">

        <div class="logo" style="margin: 1.5rem;">
          <a class="logo__link" href="index.php">
            <img class="logo__img" src="images/tcu-canteen-logo.svg" alt="TCU Canteen">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link categories__link" href="shop.php">
                Canteen
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link" href="about.php">
                About us
              </a>
            </li>


            <li class="categories__item">
              <a class="categories__link" href="contact.php">
                Contact Us
              </a>
            </li>


          </ul>
        </nav>
      </div>
    </div>
  </header>