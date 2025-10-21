<?php
include "connection.php";

$id = $_GET["id"];

if (isset($id)) {
    mysqli_query($link, "DELETE FROM table1 WHERE id = $id");
}
?>

<script type="text/javascript">
    alert("Record deleted successfully!");
    window.location = "index.php";
</script>
