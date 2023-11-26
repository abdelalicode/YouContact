<?php
include "database.php";

    if (isset($_POST['upd'])) {
        
        $id = $_POST['id'];
        $updaname = $_POST["name"];
        $updaemail = $_POST["email"];
        $updaphone = $_POST["phone"];
        $sqlupd = "UPDATE contact SET name= '$updaname' , email= '$updaemail' , phone = '$updaphone'  WHERE id = '$id'";
        mysqli_query($conn, $sqlupd);
    }

    header("Location: home.php");
    exit();
    ?>