<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "";
  $headers = "From: " . $email;

  mail($to,$name,$message,$headers);

    return "success";
}
?>
