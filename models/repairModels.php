<?php
function openDatabaseConnection() {
  $link = new PDO("mysql:host=localhost; dbname=simplephpcrud", 'root', 'root');
  return $link;
}

function closeDatabaseConnection(&$link) {
  $link = null;
}

function getAllRepairs() {
  $link = openDatabaseConnection();

  $result = $link->query('SELECT * FROM repairs ORDER BY id DESC');

  $repairs = array();

  while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $repairs[] = $row;
  }
  closeDatabaseConnection($link);
  return $repairs;
}

function getRepairById($id) {
  $link = openDatabaseConnection();

  $result = $link->prepare('SELECT * FROM repairs WHERE id = :id');
  $result->bindParam('id', $id, PDO::PARAM_STR);
  $result->execute();

  $row = $result->fetch(PDO::FETCH_ASSOC);
  closeDatabaseConnection($link);
  return $row;
}

function addRepair($first_name, $last_name, $phone_number, $email, $device, $device_password, $imei, $parts, $price, $notes) {
  $link = openDatabaseConnection();

  $result = $link->prepare('INSERT INTO repairs (first_name, last_name, phone_number, email, device, device_password, imei, parts, price, notes) VALUES (:first_name, :last_name, :phone_number, :email, :device, :device_password, :imei, :parts, :price, :notes)');
  $result->bindParam('first_name', $first_name, PDO::PARAM_STR);
  $result->bindParam('last_name', $last_name, PDO::PARAM_STR);
  $result->bindParam('phone_number', $phone_number, PDO::PARAM_STR);
  $result->bindParam('email', $email, PDO::PARAM_STR);
  $result->bindParam('device', $device, PDO::PARAM_STR);
  $result->bindParam('device_password', $device_password, PDO::PARAM_STR);
  $result->bindParam('imei', $imei, PDO::PARAM_STR);
  $result->bindParam('parts', $parts, PDO::PARAM_STR);
  $result->bindParam('price', $price, PDO::PARAM_STR);
  $result->bindParam('notes', $notes, PDO::PARAM_STR);
  $result->execute();
  closeDatabaseConnection($link);
}

function updateRepair($id, $first_name, $last_name, $phone_number, $email, $device, $device_password, $imei, $parts, $price, $notes) {
  $link = openDatabaseConnection();

  $result = $link->prepare('UPDATE repairs SET first_name = :first_name, last_name = :last_name, phone_number = :phone_number, email = :email, device = :device, device_password = :device_password, imei = :imei, parts = :parts, price = :price, notes = :notes WHERE id = :id');
  $result->bindParam('id', $id, PDO::PARAM_STR);
  $result->bindParam('first_name', $first_name, PDO::PARAM_STR);
  $result->bindParam('last_name', $last_name, PDO::PARAM_STR);
  $result->bindParam('phone_number', $phone_number, PDO::PARAM_STR);
  $result->bindParam('email', $email, PDO::PARAM_STR);
  $result->bindParam('device', $device, PDO::PARAM_STR);
  $result->bindParam('device_password', $device_password, PDO::PARAM_STR);
  $result->bindParam('imei', $imei, PDO::PARAM_STR);
  $result->bindParam('parts', $parts, PDO::PARAM_STR);
  $result->bindParam('price', $price, PDO::PARAM_STR);
  $result->bindParam('notes', $notes, PDO::PARAM_STR);

  $result->execute();
  closeDatabaseConnection($link);
}

function deleteRepair($id) {
  $link = openDatabaseConnection();

  $result = $link->prepare('DELETE FROM repairs WHERE id = :id');
  $result->bindParam('id', $id, PDO::PARAM_STR);
  $result->execute();

  closeDatabaseConnection($link);
}



 ?>
