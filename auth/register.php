<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager || Register</title>

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
        <div class="side-img">
            <img src="../assets/images/reg1.png" alt="">
        </div>
        <div class="form">
            <div class="form-sect">
                <div class="form-logo">
                    <a href="../index.php"><img src="../assets/images/logo.png" alt=""></a>
                </div>

                <h2 class="h2 about-title">Create New Account</h2>

                <form action="#" method="" id="signUp-form">
                    <div class="error-txt"></div>
                    <label for="fname" class="label">Full name</label>
                    <input type="text" name="fname" class="inp">
                    <label for="email" class="label">Email</label>
                    <input type="email" name="email" class="inp">
                    <label for="password" class="label">Password</label>
                    <input type="password" name="password" class="inp">
                    <button type="submit" name="Signup" class="btn btn-primary btn-form" id="signUp-btn">Sign Up</button>
                    <p class="form-txt">By clicking Sign Up, you agree to our<span><a href="terms.php">Terms & Conditions</a> </span></p>
                </form>

                <div class="form-alt">
                    <p>Already have an account? <span><a href="login.php">Log In</a> </span></p>
                </div>
            </div>

        </div>
    </div>


    <script src="../scripts/js/signup.js"></script>
</body>

</html>