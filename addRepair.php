<?php
require_once 'models/repairModels.php';


if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['phone_number']) && isset($_POST['email']) && isset($_POST['device']) && isset($_POST['device_password']) && isset($_POST['imei']) && isset($_POST['parts']) && isset($_POST['price']) && isset($_POST['notes']) && isset($_POST['waiver'])) {
    

        $first_nameErr = null;
        $last_nameErr = null;
        $phone_numberErr = null;
        $emailErr = null;
        $deviceErr = null;
        $device_passwordErr = null;
        $imeiErr = null;
        $partsErr = null;
        $priceErr = null;
        $notesErr = null;
        $waiverErr = null;

        $valid = true;

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
        $waiver = $_POST['waiver'];

        if(empty($first_name)) {
          $first_nameErr = "Please Enter your first name";
          $valid = false;
        }
        if(empty($last_name)) {
          $last_nameErr = "Please Enter your last name";
          $valid = false;
        }
        if(empty($phone_number)) {
          $phone_numberErr = "Please Enter your phone number";
          $valid = false;
        }
        if(empty($email)) {
          $emailErr = "Please Enter your email";
          $valid = false;
        }
        if(empty($device)) {
          $deviceErr = "Please Enter the device";
          $valid = false;
        }
        if(empty($device_password)) {
          $device_passwordErr = "Please Enter the device password";
          $valid = false;
        }
        if(empty($imei)) {
          $imeiErr = "Please Enter the imei";
          $valid = false;
        }
        if(empty($parts)) {
          $partsErr = "Please Enter the parts being replaced";
          $valid = false;
        }
        if(empty($price)) {
          $priceErr = "Please Enter the price of the Repair";
          $valid = false;
        }
        if(empty($notes)) {
          $notesErr = "Please Enter some notes";
          $valid = false;
        }
        if($waiver == "no") {
          $waiverErr = "Must be agreed to";
          $valid = false;
        }




        if($valid) {
          addRepair($first_name, $last_name, $phone_number, $email, $device, $device_password, $imei, $parts, $price, $notes);
          header("Location: index.php");
        }
    
}
?>

<?php include_once 'includes/header.php'; ?>

<form class="" action="addRepair.php" name="addForm" method="post"">

  <div class="form-group">
  <label for="first_name">First Name:</label>
  <input type="text" name="first_name" value="<?php echo !empty($first_name)?$first_name:'';?>" placeholder="first name">
  <?php if (!empty($first_nameErr)): ?>
      <span class="error"><?php echo $first_nameErr;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="last_name">Last Name:</label>
  <input type="text" name="last_name" value="<?php echo !empty($last_name)?$last_name:'';?>" placeholder="last name">
  <?php if (!empty($last_nameErr)): ?>
      <span class="error"><?php echo $last_nameErr;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="phone_number">Phone Number:</label>
  <input type="text" name="phone_number" value="<?php echo !empty($phone_number)?$phone_number:'';?>" placeholder="phone number">
  <?php if (!empty($phone_numberErr)): ?>
      <span class="error"><?php echo $phone_numberErr;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="email">Email:</label>
  <input type="text" name="email" value="<?php echo !empty($email)?$email:'';?>" placeholder="email">
  <?php if (!empty($emailErr)): ?>
      <span class="error"><?php echo $emailErr;?></span>
  <?php endif;?>
  <span id="emailError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="device">Device:</label>
  <input type="text" name="device" value="<?php echo !empty($device)?$device:'';?>" placeholder="device">
  <?php if (!empty($deviceErr)): ?>
      <span class="error"><?php echo $deviceErr;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="device_password">Device Password:</label>
  <input type="text" name="device_password" value="<?php echo !empty($device_password)?$device_password:'';?>" placeholder="device password">
  <?php if (!empty($device_passwordErr)): ?>
      <span class="error"><?php echo $device_passwordErr;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="imei">IMEI:</label>
  <input type="text" name="imei" value="<?php echo !empty($imei)?$imei:'';?>" placeholder="imei">
  <?php if (!empty($imeiErr)): ?>
      <span class="error"><?php echo $imeiErr;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="parts">Parts:</label>
  <input type="text" name="parts" value="<?php echo !empty($parts)?$parts:'';?>" placeholder="parts">
  <?php if (!empty($partsErr)): ?>
      <span class="error"><?php echo $partsErr;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="price">Price:</label>
  <input type="text" name="price" value="<?php echo !empty($price)?$price:'';?>" placeholder="price">
  <?php if (!empty($priceErr)): ?>
      <span class="error"><?php echo $priceErr;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <label for="notes">Notes:</label>
  <input id="notes" type="text" name="notes" value="<?php echo !empty($notes)?$notes:'';?>" placeholder="notes">
  <?php if (!empty($notesErr)): ?>
      <span class="error"><?php echo $notesErr;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <div class="form-group">
  <input name="waiver" value="no" hidden>
  <input name="waiver" value="accept" type="checkbox" <?php if($waiver = isset($_POST['waiver']) && $waiver == "accept") echo "checked = 'checked'"; ?>>
  <label for="waiver">Liability Waiver:</label>
  <?php if (!empty($waiverErr)): ?>
      <span class="error"><?php echo $waiverErr;?></span>
  <?php endif; ?>
  <span id="nameError" class="error"></span>
  </div>

  <button class="btn btn-primary" type="submit" name="button">Add Repair</button>

</form>

<?php include_once 'includes/footer.php'; ?>
