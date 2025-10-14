<?php
session_start();

/* connect to database check user */
$link = mysqli_connect("localhost", "root", "", "LoginReg") or die(mysqli_connect_error());

/* create variables to store data */
$name = $_POST['user'];
$pass = $_POST['password'];

/* select data from DB */
$s = "SELECT * FROM userReg WHERE name='$name' AND password='$pass'";

/* result variable to store data */
$result = mysqli_query($link, $s);

/* check for duplicate names and count records */
$num = mysqli_num_rows($result);

if ($num == 1) {
    /* Storing the username and session */
    $_SESSION['username'] = $name;
    header('Location: home.php');
} else {
    header('Location: login.php');
}

mysqli_close($link);
?>
