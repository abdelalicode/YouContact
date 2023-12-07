<?php

include "database.php";
session_start();
if (isset($_POST['ok'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $iduser = $_SESSION['id'];
    $sqlent = "INSERT INTO contact (name, email, phone, iduser)
                VALUES ('$name', '$email', '$phone', $iduser)";

    mysqli_query($conn, $sqlent);

    header("Location: home.php");
    exit();
}
