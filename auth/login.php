<?php
session_start();
if (isset($_SESSION['unique_id'])) { //if user is loggedin in a browser
    header("location: ../dashboard/dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager || Login</title>

    <!-- - favicon-->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- - custom css link-->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- - google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="body-cont">

        <div class="form">
            <div class="form-sect">
                <div class="form-logo">
                    <a href="../index.php"><img src="../assets/images/logo.png" alt=""></a>
                </div>

                <h2 class="h2 about-title">Login To Account</h2>

                <form action="#" method="" id="login-form">
                    <div class="error-txt">error message</div>

                    <label for="email" class="label">Email</label>
                    <input type="email" name="email" class="inp">
                    <label for="password" class="label">Password</label>
                    <input type="password" name="password" class="inp">
                    <button type="submit" name="login" class="btn btn-primary btn-form" id="login-btn">Log in</button>
                    <p class="form-txt"><span><a href="forgottenpass.php">Forgotten Password?</a> </span></p>
                </form>

                <div class="form-alt">
                    <p>Don't have an account? <span><a href="register.php">Register Now</a> </span></p>
                </div>
            </div>

        </div>

        <div class="side-img">
            <img src="../assets/images/login2.png" alt="">
        </div>
    </div>


    <script src="../scripts/js/login.js"></script>
</body>

</html>