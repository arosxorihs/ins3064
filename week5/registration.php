<?php
session_start();

/* Connect to database */
$link = mysqli_connect("localhost", "root", "", "LoginReg") or die(mysqli_connect_error());

/* Get data from form */
$name = $_POST['user'];
$pass = $_POST['password'];
$country = $_POST['country'];

/* Check if username already exists */
$s = "SELECT * FROM userReg WHERE name='$name'";
$result = mysqli_query($link, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Username already exists!";
} else {
    /* Register new user including country */
    $reg = "INSERT INTO userReg (name, password, country) VALUES ('$name', '$pass', '$country')";
    mysqli_query($link, $reg);
    echo "Registration successful!";

    /* Redirect after registration */
    header("Location: login.php");
    exit();
}
?>
