<?php
include "database.php";
session_start();

if (isset($_POST["signin"])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);


    if (empty($username) || empty($password)) {
        header("Location: index.php");
        exit();
       
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM user WHERE username = '$username' AND password ='$password'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];

                header("Location: home.php");
                exit();
            } else {
                echo "Invalid username or password";
            }
        } else {
            echo "No Result!";
        }
    }
}
?>
