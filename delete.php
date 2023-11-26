<?php
include "database.php";

$resid = $_GET["id"];

$sqldel = "DELETE FROM contact Where id = $resid ";
mysqli_query($conn, $sqldel);

header("Location: home.php");
exit();

?>