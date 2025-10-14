<?php
include("db_connect.php");

$message = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        $message = "Login successful!";
    } else {
        $message = "Wrong infor";
    }
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $check = mysqli_query($link, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($check) > 0) {
        $message = "Existed";
    } else {
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($link, $query)) {
            $message = "Successful.";
        } else {
            $message = "Error: " . mysqli_error($link);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login & Register</title>
</head>
<body>
    <h2>Login or Register </h2>
    <p><?php echo $message; ?></p>

    <?php if (!isset($_POST['login']) && !isset($_POST['register']) && !isset($_GET['action'])) { ?>
        <form method="get">
            <input type="submit" name="action" value="Login">
            <input type="submit" name="action" value="Register">
        </form>
    <?php } ?>

    <?php if (isset($_GET['action']) && $_GET['action'] == "Login") { ?>
        <h3>Login</h3>
        <form method="post">
            Username: <input type="text" name="username" required><br><br>
            Password: <input type="password" name="password" required><br><br>
            <input type="submit" name="login" value="Login">
        </form>
        <br>
        <a href="index.php">Back</a>
    <?php } ?>

    <?php if (isset($_GET['action']) && $_GET['action'] == "Register") { ?>
        <h3>Register</h3>
        <form method="post">
            Username: <input type="text" name="username" required><br><br>
            Password: <input type="password" name="password" required><br><br>
            <input type="submit" name="register" value="Register">
        </form>
        <br>
        <a href="index.php">Back</a>
    <?php } ?>
</body>
</html>
