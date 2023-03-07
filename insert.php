<?php
include "connect.php";

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];
  $password = md5($_POST["password"]);

  $sql = "INSERT INTO crud (name, email, mobile, password) VALUES('$name', '$email', '$mobile', '$password')";
  $result = mysqli_query($con, $sql);

  if ($result) {
    // echo "Data inserted successfully";
    header("location:display.php");
  } else {
    echo "Error: " . $sql . "<br>" . die(mysqli_error($con));
  }
}
