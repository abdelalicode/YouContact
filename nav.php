<?php
session_start();
if (isset($_SESSION['username'])) {
    $usrname = $_SESSION['username'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>YouContact</title>
</head>

<body>


    <nav class="navbar navbar-light" style="background-color: #f5f5f5;">

        <div class="container-fluid d-flex align-items-center justify-content-between ">
            <a class="navbar-brand" href="home.php"><img src="images/contact.png" alt=""></a>
            <!-- <p class="pt-3" style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: #00008B; font-weight: 600; font-size: 0.8em;">Get Your Connections Easily</p> -->
            <input id="navcomp1" type="text" style=" float: right; padding: 6px; border: none; margin-top: 8px; margin-right: 16px; font-size: 17px;" placeholder="Search..">
            <div class="btn-group dropstart " id="navcomp2">
                <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropstart</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Action two</a></li>
                    <li><a class="dropdown-item" href="logout.php">LogOut</a></li>
                </ul>
                <button type="button" class="btn btn-light">
                    <div class="fw-bold"><?= $usrname ?></div>
                </button>
            </div>

            <?php
            if (isset($_SESSION['username'])) {
            } else {


            ?>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signModal" style="background: #003366;">
                    SIGN IN
                </button>

                <!-- Modal -->
                <div class="modal fade" id="signModal" tabindex="-1" aria-labelledby="signModalLabel" aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h5 class="modal-title" id="signModalLabel">SIGN IN</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="signin.php" method="post">
                                <div class="modal-body d-flex flex-column w-50" style="gap: 10px;">

                                    <label>USERNAME:</label>
                                    <input type="text" name="username">
                                    <label>PASSWORD:</label>
                                    <input type="password" name="password">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="signin" class="btn btn-primary" style="background: #003366;">LOGIN</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>


        </div>



    <?php   } ?>

    </nav>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-ueFY3TluF7YiPe7oh1yR62gpbb6TVH7Lqf3KqvCq12qmtE8pg6zjgDAg6Fq8zoV+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>