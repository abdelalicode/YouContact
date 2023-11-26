<?php
include "database.php";
include "form.php";
include "nav.php";
?>

<div class="container">

    <div class="row m-5">
        <div class="d-flex align-items-center justify-content-between pb-5">
            <h1>Hello USER!</h1>

        </div>
        <div class="container-fluid">

            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-white rounded-3" style="background:#002089;">
                        <h2>ADD NEW CONTACT</h2>
                        <p>Never lose a contact of yours and Manage your contacts easily.<br>And Your infos are more secure with our Privacy Policy</p>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            ADD NEW
                        </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter Nouveau Contact</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="form.php" method="post">
                                        <label for="username">Full Name :</label><br>
                                        <input type="text" name="name"><br><br>
                                        <label for="email">Email :</label><br>
                                        <input type="email" name="email"><br><br>
                                        <label for="phone">Phone :</label><br>
                                        <input type="text" name="phone"><br><br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="ok" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2>NEW FEATURE</h2>
                        <p>Put your contacts into Groups to access to anyone wery easily</p>
                        <button class="btn btn-outline-secondary" type="button">MY GROUPS</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-2 bg-warning mt-5 d-flex flex-column justify-content-start">
                    <h3 class="text-light py-3">OVERVIEW</h3>
                    <h5>You've Got</h5>
                    <?php
                    $countquery = "SELECT COUNT(*) as count FROM contact";
                    $result = mysqli_query($conn, $countquery);

                    $row = mysqli_fetch_assoc($result);
                    $count = $row['count'];
                    echo "<h2>$count</h2>";
                    ?>

                    <h5 class= "pb-5">Contact(s)</h5>
                </div>
                <div class="col-md-10 col-sm-12 mt-5">
                    <h2 class="mb-3">YOUR CONTACTS LIST</h2>
                    <table class="table table-striped table-hover w-100">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">FULL NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">PHONE</th>
                            </tr>
                        </thead>

                        <?php


                        // Create Contacts
                        // if (isset($_POST['ok'])) {
                        //     $name = $_POST["name"];
                        //     $email = $_POST["email"];
                        //     $phone = $_POST["phone"];
                        //     $iduser = $_POST["iduser"];
                        //     $sqlent = "INSERT INTO contact (name, email, phone, iduser)
                        //     VALUES ('$name', '$email', '$phone', '$iduser')";

                        //     mysqli_query($conn, $sqlent);
                        // }




                        // Read Contacts
                        $sqlsel = "SELECT * FROM contact";
                        $result = mysqli_query($conn, $sqlsel);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["name"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["phone"] . "</td>";
                        ?>

                                <td> <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row["id"] ?>">UPDATE</button>

                                    <?php
                                    echo "<td style='display:flex; align-items:center;'><a style='border-radius:5px; background:red; color: white; outline: none; text-decoration: none; padding: 0.5em 1em;' href='delete.php?id=" . $row["id"] . "'>DELETE</a></td>";
                                    echo "<tr>";
                                    ?>
                                    <div class="modal fade" id="modal<?php echo $row["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <form action="update.php" method="post">
                                                    <div class="modal-body">
                                                        <label for="username">Full Name :</label><br>
                                                        <input type="text" name="name" value="<?= $row["name"] ?>"><br><br>
                                                        <label for="email">Email :</label><br>
                                                        <input type="email" name="email" value="<?= $row["email"] ?>"><br><br>
                                                        <label for="phone">Phone :</label><br>
                                                        <input type="text" name="phone" value="<?= $row["phone"] ?>"><br><br>
                                                        <label for="iduser">IdUser :</label><br>
                                                        <input type="text" name="iduser" value="<?= $row["iduser"] ?>"><br><br>
                                                        <input type="hidden" name="id" value="<?= $row["id"] ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="submit" name="upd" class="btn btn-secondary" value="Save changes">
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                </div>
            </div>
        </div>
<?php
                            }
                        } else {

                            echo "<h5>No Contact Found!</h5>";
                        }

                        mysqli_close($conn);
?>

</table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>