<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>FNGG</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Form -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

</head>
<style>
/* The message box is shown when the user clicks on the password field */
#message {
    display: none;
    background: #f0f0f0;
    ;
    color: #000;
    position: absolute;
    right: -50px;
    padding: 10px;
    margin-top: 1px;
}

#message p {
    padding: 10px 30px;
    font-size: 15px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: absolute;
    left: 15px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -15px;
    content: "✖";
}

input[type='password'] {
    width: 400px;
    border: 0.1rem solid black;
    border-radius: 5px;
}
</style>

<body>
    <!-- nav -->
    <?php include_once('header.php'); ?>
    <!-- END nav -->

    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 py-5">
                <h3>Change Password</h3>
                <hr style="border: 1px solid gray;">
                <p class="mb-4">
                <form action="change-p.php" method="post">

                    <div id="message">
                        <h5>Password must contain the following:</h5>
                        <p id="strength" class=""></p>
                        <p id="capital" class="invalid"><b>UPPERCASE</b> [A-Z]</p>
                        <p id="letter" class="invalid"><b>lowercase</b> [a-z]</p>
                        <p id="number" class="invalid"><b>number</b> [0-9]</p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>


                    </div>

                    <?php if (isset($_GET['error'])) { ?>
                    <p style="background-color: #bf7b77 !important;" class="form-control alert alert-danger">
                        <?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                    <p style="background-color: #2fa134 !important;" class="form-control alert alert-success">
                        <?php echo $_GET['success']; ?></p>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">Old Password</h5>
                                </label>
                                <input class="form-control" type="password" name="op">
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">New Password</h5>
                                </label>
                                <!-- <input class="form-control" type="password" name="np"> -->
                                <input class="form-control" type="password" id="psw" name="np"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                    required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group first">
                                <label for="">
                                    <h5 style="font-size: 17px;">Confirm Password</h5>
                                </label>
                                <input class="form-control" type="password" name="c_np" id="psw2">
                                <!-- <input class="form-control" type="password" id="psw2" name="c_np"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                    required> -->
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Confirm</button>
                        </div>
                    </div>

                </form>



                <script>
                var myInput = document.getElementById("psw");
                var myInput2 = document.getElementById("psw2");

                var letter = document.getElementById("letter");
                var capital = document.getElementById("capital");
                var number = document.getElementById("number");
                var length = document.getElementById("length");

                var strength = document.getElementById("strength");


                // When the user clicks on the password field, show the message box
                myInput.onfocus = function() {
                    document.getElementById("message").style.display = "block";
                }

                // When the user clicks outside of the password field, hide the message box
                myInput.onblur = function() {
                    document.getElementById("message").style.display = "none";
                }

                // When the user clicks on the password field, show the message box
                myInput2.onfocus = function() {
                    document.getElementById("message").style.display = "block";
                }

                // When the user clicks outside of the password field, hide the message box
                myInput2.onblur = function() {
                    document.getElementById("message").style.display = "none";
                }


                // When the user starts to type something inside the password field
                myInput.onkeyup = function() {

                    // Validate lowercase letters
                    var strength = 0;

                    var lowerCaseLetters = /[a-z]/g;
                    if (myInput.value.match(lowerCaseLetters)) {
                        letter.classList.remove("invalid");
                        letter.classList.add("valid");
                        strength = strength + 1;
                    } else {
                        letter.classList.remove("valid");
                        letter.classList.add("invalid");
                        strength = strength - 1;
                    }

                    // Validate capital letters
                    var upperCaseLetters = /[A-Z]/g;
                    if (myInput.value.match(upperCaseLetters)) {
                        capital.classList.remove("invalid");
                        capital.classList.add("valid");
                        strength = strength + 1;
                    } else {
                        capital.classList.remove("valid");
                        capital.classList.add("invalid");
                        strength = strength - 1;
                    }

                    // Validate numbers
                    var numbers = /[0-9]/g;
                    if (myInput.value.match(numbers)) {
                        number.classList.remove("invalid");
                        number.classList.add("valid");
                        strength = strength + 1;
                    } else {
                        number.classList.remove("valid");
                        number.classList.add("invalid");
                        strength = strength - 1;
                    }

                    // Validate length
                    if (myInput.value.length >= 8) {
                        length.classList.remove("invalid");
                        length.classList.add("valid");
                        strength = strength + 1;
                    } else {
                        length.classList.remove("valid");
                        length.classList.add("invalid");
                        strength = strength - 1;
                    }
                    // validate password strong
                    if (strength <= 1) {
                        
                        document.getElementById("strength").innerHTML = "✖ Weak!";
                        document.getElementById("strength").style.color = 'red';
                    }
                    if (strength == 2) {
                        
                        document.getElementById("strength").innerHTML = "✔ Medium!";
                        document.getElementById("strength").style.color = 'green';
                    }
                    if (strength > 2) {
                        
                        document.getElementById("strength").innerHTML = "✔ Strong!";
                        document.getElementById("strength").style.color = 'green';
                    }
                }
                </script>
            </div>

        </div>
    </div>



    <!--  -->
</body>

</html>
<?php
} else {
     header("Location: index.php");
     exit();
}
?>