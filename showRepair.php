<?php
require_once 'models/repairModels.php';

  $id = null;

  if(!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
  }

  $repair = getRepairById($id);


 ?>

<?php include_once 'includes/header.php'; ?>

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

          echo '<tr>';
          echo '<td>' . $repair['first_name'] . ' ' . $repair['last_name'] . '</td>';
          echo '<td>' . $repair['phone_number'] . '</td>';
          echo '<td>' . $repair['created_at'] . '</td>';
          echo '<td>' . $repair['updated_at'] . '</td>';
          echo '</tr>';
        
       ?>
    </tbody>
</table>
</div><!-- End of Repair Table DIV -->

<?php include_once 'includes/footer.php'; ?>
