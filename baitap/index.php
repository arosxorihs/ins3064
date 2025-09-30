<?php
include "connection.php";
?>

<html lang="en">
<head>
    <title>Laptop Shop Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="col-lg-6">
        <h2>Laptop Data Form</h2>
        <form action="" name="form1" method="post">
            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" class="form-control" id="brand" placeholder="Enter brand" name="brand">
            </div>
            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" class="form-control" id="model" placeholder="Enter model" name="model">
            </div>
            <div class="form-group">
                <label for="processor">Processor:</label>
                <input type="text" class="form-control" id="processor" placeholder="Enter processor" name="processor">
            </div>
            <div class="form-group">
                <label for="ram_size">RAM Size:</label>
                <input type="text" class="form-control" id="ram_size" placeholder="Enter RAM size" name="ram_size">
            </div>
            <div class="form-group">
                <label for="storage_size">Storage Size:</label>
                <input type="text" class="form-control" id="storage_size" placeholder="Enter storage size" name="storage_size">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" placeholder="Enter price" name="price">
            </div>
            <div class="form-group">
                <label for="stock_quantity">Stock Quantity:</label>
                <input type="number" class="form-control" id="stock_quantity" placeholder="Enter stock quantity" name="stock_quantity">
            </div>

            <button type="submit" name="insert" class="btn btn-primary">Insert</button>
            <button type="submit" name="update" class="btn btn-success">Update</button>
            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>

<div class="col-lg-12">
    <h2>Available Laptops</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Processor</th>
            <th>RAM</th>
            <th>Storage</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (!empty($link)) {
            $res=mysqli_query($link,"SELECT * FROM table2");
            while($row=mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["brand"]."</td>";
                echo "<td>".$row["model"]."</td>";
                echo "<td>".$row["processor"]."</td>";
                echo "<td>".$row["ram_size"]."</td>";
                echo "<td>".$row["storage_size"]."</td>";
                echo "<td>".$row["price"]."</td>";
                echo "<td>".$row["stock_quantity"]."</td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>

<?php
// Insert
if(isset($_POST["insert"])) {
    mysqli_query($link,"INSERT INTO table2 VALUES (NULL,'$_POST[brand]','$_POST[model]','$_POST[processor]','$_POST[ram_size]','$_POST[storage_size]','$_POST[price]','$_POST[stock_quantity]')");
    ?>
    <script type="text/javascript">
        window.location.href=window.location.href;
    </script>
    <?php
}

// Delete by brand + model
if(isset($_POST["delete"])) {
    mysqli_query($link,"DELETE FROM table2 WHERE brand='$_POST[brand]' AND model='$_POST[model]'");
    ?>
    <script type="text/javascript">
        window.location.href=window.location.href;
    </script>
    <?php
}

// Update price and stock by brand + model
if(isset($_POST["update"])) {
    mysqli_query($link,"UPDATE table2 SET price='$_POST[price]', stock_quantity='$_POST[stock_quantity]' WHERE brand='$_POST[brand]' AND model='$_POST[model]'");
    ?>
    <script type="text/javascript">
        window.location.href=window.location.href;
    </script>
    <?php
}
?>
</html>
