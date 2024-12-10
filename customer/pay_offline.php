<div class="header">
  <!-- center Starts -->

  <h1> Payment </h1>

  <p class="lead">

    If you have any questions, please feel free to <a href="../contact.php"
      style="color: #ed1b24; text-decoration: underline">contact us,</a> our
    customer
    service
    center
    is working for you 24/7.

  </p>

</div><!-- center ends -->

<hr>

<div class="table-responsive payment_method_container">
  <!-- table-responsive Starts -->

  <table class="table table-bordered table-hover table-striped">
    <!-- table table-bordered table-hover table-striped Starts -->

    <thead>
      <!-- thead Starts -->

      <tr>
        <th> Stall Number </th>
        <th> Stall Contact Number </th>
      </tr>

    </thead><!-- thead ends -->

    <tbody>
      <!-- tbody Starts -->

      <?php
      $query = "SELECT manufacturer_title, contact FROM manufacturers";
      $result = mysqli_query($con, $query);

      if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<td>" . $row['manufacturer_title'] . "</td>";
              echo "<td>" . $row['contact'] . "</td>";
              echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='2'>No manufacturer data found.</td></tr>";
      }
      ?>

    </tbody><!-- tbody ends -->


  </table><!-- table table-bordered table-hover table-striped ends -->

</div><!-- table-responsive ends -->
