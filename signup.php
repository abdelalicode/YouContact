<?php
include "database.php";
session_start();


if (isset($_POST["signin"])) {

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);



    if (empty($username) || empty($password) || empty($email)) {

        header("Location: index.php");
    } else {
        $sqllog = "INSERT INTO user(username, password, email) VALUES ('$username', '$password', '$email' ) ";
        try {
            mysqli_query($conn, $sqllog);
        } catch (mysqli_sql_exception) {
            echo "That username is taken";
        }

        $sqlinser = "SELECT * FROM user WHERE username = '$username' AND password ='$password'";
        $result = mysqli_query($conn, $sqlinser);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {

                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                $_SESSION["username"] = $username;
            }
            header("Location: profile.php");
        }

        exit();
    }
}
