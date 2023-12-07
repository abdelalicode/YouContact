<?php

include 'nav.php';
if (isset($_SESSION['id'])) {
    header('Location: home.php');
}
?>



<style>
    #navcomp1,
    #navcomp2 {
        display: none;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <img class="img-fluid" src="images/homepage.png" alt="">
        </div>
        <div class="col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
            <h2>SIGN UP!</h2>
            <form action="signup.php" class="gap-2" method="post" id="sform">
                <label for="username">USERNAME: </label>
                <input type="text" class="form-control" name="username" id="namefield">
                <div id="errorname" style="color:red;"></div>
                <label for="password">PASSWORD: </label>
                <input type="password" class="form-control" name="password" id="passwordfield">
                <div id="errorpassword" style="color:red;"></div>
                <label for="email">EMAIL: </label>
                <input type="email" class="form-control" name="email" id="emailfield">
                <div id="errormail" style="color:red;"></div>
                <div>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I've Read the privacy policy and I accept</label>
                </div>

                <button type="submit" name="signin" class="btn btn-outline-secondary" data-mdb-ripple-init data-mdb-ripple-color="dark">REGISTER</button>
            </form>
        </div>
    </div>
</div>
<script>
    const form = document.getElementById('sform');
    const emailField = document.getElementById('emailfield');
    const emailError = document.getElementById('errormail');
    const nameField = document.getElementById('namefield');
    const nameError = document.getElementById('errorname');

    form.addEventListener('submit', (e) => {

        nameError.innerHTML = '';
        emailError.innerHTML = '';

        if (nameField.value === '' || nameField.value < 4 || !nameField.value.match(/(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/)) {
            e.preventDefault();
            nameError.innerHTML = "Please enter a valid username";
        }
        
        

        if (!emailField.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
            e.preventDefault();
            emailError.innerHTML = "Please enter a valid email";
        }
    });
</script>