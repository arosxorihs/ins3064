<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Login and Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="login-box border p-4 rounded shadow">
            <div class="row">
                <!-- Login Section -->
                <div class="col-md-6 login-left border-right">
                    <h2 class="text-center mb-4">Login Here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                </div>

                <!-- Registration Section -->
                <div class="col-md-6 login-right">
                    <h2 class="text-center mb-4">Register Here</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" name="country" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-success btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
