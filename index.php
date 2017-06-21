<?php
require_once 'models/repairModels.php';

$repairs = getAllRepairs();

?>

<?php include_once 'includes/header.php'; ?>


      <div id="" class="text-center">
        <form class="" action="#" method="post">
          <input type="text" name="search-input" value="" placeholder="Search Repair">
          <button type="button" name="search-button">Search Repair</button>
        </form>
      </div><!-- End of Search DIV -->

      <div class="">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>Phone Number</th>
              <th>Date Added</th>
              <th>Date Updated</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($repairs as $repair) {
                echo '<tr>';
                echo '<td>' . $repair['first_name'] . ' ' . $repair['last_name'] . '</td>';
                echo '<td>' . $repair['phone_number'] . '</td>';
                echo '<td>' . $repair['created_at'] . '</td>';
                echo '<td>' . $repair['updated_at'] . '</td>';
                echo '<td width=300>';
                echo '<a class="btn btn-info" href="#">Read</a>';
                echo ' ';
                echo '<a class="btn btn-success" href="#">Update</a>';
                echo ' ';
                echo '<a class="btn btn-danger" href="#">Delete</a>';
                echo '</td>';
                echo '</tr>';
              }
             ?>
          </tbody>
    </table>
      </div><!-- End of Repair Table DIV -->



    <?php include_once 'includes/footer.php'; ?>
