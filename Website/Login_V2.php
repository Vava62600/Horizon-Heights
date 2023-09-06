<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'contacts';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
  die('Une erreur s est produite , veuillez réesayer plus tard !') : ' . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
  echo
