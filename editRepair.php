<?php
  require_once 'models/repairModels.php';

  $id = null;

  if(!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
  }

  if ( null==$id ) {
      header("Location: index.php");
  }

  if(!empty($_POST)) {
    // keep track post values
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $device = $_POST['device'];
    $device_password = $_POST['device_password'];
    $imei = $_POST['imei'];
    $parts = $_POST['parts'];
    $price = $_POST['price'];
    $notes = $_POST['notes'];

    updateRepair($id, $first_name, $last_name, $phone_number, $email, $device, $device_password, $imei, $parts, $price, $notes);
    header("Location: index.php");
  }else {
    $repair = getRepairById($id);


    $first_name = $repair['first_name'];
    $last_name = $repair['last_name'];
    $phone_number = $repair['phone_number'];
    $email = $repair['email'];
    $device = $repair['device'];
    $device_password = $repair['device_password'];
    $imei = $repair['imei'];
    $parts = $repair['parts'];
    $price = $repair['price'];
    $notes = $repair['notes'];
  }

?>

<?php include_once 'includes/header.php'; ?>

<form class="" action="editRepair.php?id=<?php echo $id; ?>" method="post">

  <div class="form-group">
  <label for="first_name">First Name:</label>
  <input type="text" name="first_name" value="<?php echo !empty($first_name)?$first_name:'';?>" placeholder="first name">
  <?php if (!empty($nameError)): ?>
      <span class="error"><?php echo $nameError;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="last_name">Last Name:</label>
  <input type="text" name="last_name" value="<?php echo !empty($last_name)?$last_name:'';?>" placeholder="last name">
  <?php if (!empty($nameError)): ?>
      <span class="error"><?php echo $nameError;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="phone_number">Phone Number:</label>
  <input type="text" name="phone_number" value="<?php echo !empty($phone_number)?$phone_number:'';?>" placeholder="phone number">
  <?php if (!empty($nameError)): ?>
      <span class="error"><?php echo $nameError;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="email">Email:</label>
  <input type="text" name="email" value="<?php echo !empty($email)?$email:'';?>" placeholder="email">
  <?php if (!empty($emailError)): ?>
      <span class="error"><?php echo $emailError;?></span>
  <?php endif;?>
  <span id="emailError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="device">Device:</label>
  <input type="text" name="device" value="<?php echo !empty($device)?$device:'';?>" placeholder="device">
  <?php if (!empty($nameError)): ?>
      <span class="error"><?php echo $nameError;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="device_password">Device Password:</label>
  <input type="text" name="device_password" value="<?php echo !empty($device_password)?$device_password:'';?>" placeholder="device password">
  <?php if (!empty($nameError)): ?>
      <span class="error"><?php echo $nameError;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="imei">IMEI:</label>
  <input type="text" name="imei" value="<?php echo !empty($imei)?$imei:'';?>" placeholder="imei">
  <?php if (!empty($nameError)): ?>
      <span class="error"><?php echo $nameError;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="parts">Parts:</label>
  <input type="text" name="parts" value="<?php echo !empty($parts)?$parts:'';?>" placeholder="parts">
  <?php if (!empty($nameError)): ?>
      <span class="error"><?php echo $nameError;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="price">Price:</label>
  <input type="text" name="price" value="<?php echo !empty($price)?$price:'';?>" placeholder="price">
  <?php if (!empty($nameError)): ?>
      <span class="error"><?php echo $nameError;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="notes">Notes:</label>
  <input type="text" name="notes" value="<?php echo !empty($notes)?$notes:'';?>" placeholder="notes">
  <?php if (!empty($nameError)): ?>
      <span class="error"><?php echo $nameError;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>
  
  <button class="btn btn-primary" type="submit" name="button">Update Repair</button>
</form>

<?php include_once 'includes/footer.php'; ?>
