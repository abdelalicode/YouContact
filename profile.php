<?php
include "database.php";
include "nav.php";
?>

<?php

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

$userpage = $_SESSION['username'];

$sqlselprof = "SELECT * FROM user WHERE username = '$userpage'";
$result = mysqli_query($conn, $sqlselprof);


$row = mysqli_fetch_assoc($result);
?>

<div class="container">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-8 mt-5">
      <div class="card" style="width: 25vw">
        <img src="images/utilisateur.png" class="card-img-top w-25 m-5" alt="...">
        <div class="card-body">
          <h5 class="card-title">PROFILE</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?= "<strong>USERNAME:</strong>" . $row["username"] ?></li>
          <li class="list-group-item"><?= "<strong>EMAIL:</strong>" . $row["email"] ?></li>
          <li class="list-group-item"><?= "<strong>INSCRIPTION DATE:</strong>" . $row["date_inscription"] ?></li>
        </ul>
        <div class="card-body">
          <a href="home.php" class="card-link">CONTACTS</a>
          <a href="logout.php" class="card-link">LOGOUT</a>
        </div>
      </div>
    </div>
  </div>
</div>