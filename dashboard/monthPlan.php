<?php

session_start();
include_once "../scripts/php/dbconn.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: ../auth/login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- - custom css link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- - custom css link-->
    <link rel="stylesheet" href="./css/styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- - google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <?php
    include_once "../scripts/php/dbconn.php";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
    }
    ?>
    <div class="header">
        <div class="top-nav">
            <div class="left-nav">
                <i class="fa-solid fa-bars" id="menu"></i>
                <img src="../assets/images/logo.png" alt="logo" class="logo">
            </div>
            <div class="left-nav-mobile">
                <i class="fa-solid fa-bars" id="mobile"></i>
                <img src="../assets/images/logo.png" alt="logo" class="logo">
            </div>
            <div class="right-nav">
                <i class="fa-solid fa-plus"></i>
                <i class="fa-solid fa-bell"></i>
                <div class="profile">
                    <img src="uploads/<?php echo $row['proImg'] ?>" alt="profile" class="profile-img">
                    <i class="fa-solid fa-caret-down"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="mobile-nav" id="mobile-navs">
            <ul>
                <a href="dashboard.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-pen-to-square"></i>Today</li>
                </a>
                <a href="addTask.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-plus"></i>Add Task</li>
                </a>
                <a href="rateMe.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-bookmark"></i>Rate Me</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-calendar-days"></i>Calendar</li>
                </a>
                <a href="addNote.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-pencil"></i>Add Experience</li>
                </a>
                <a href="myNote.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-book"></i>My Notebook</li>
                </a>
                <a href="monthPlan.php" class="nav-link  active">
                    <li class="nav-items"><i class="fa-solid fa-chart-simple"></i>Monthly Plan</li>
                </a>
                <a href="history.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-database"></i>History</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-bell"></i>Notification</li>
                </a>
                <a href="profile.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-user"></i>Profile</li>
                </a>
                <form action="../scripts/php/logout.php" method="POST">
                    <input type="hidden" value="<?php echo $row['unique_id'] ?>">
                    <button type="submit" name="logout" class="btn-logOut btn "><i class="fa-solid fa-right-from-bracket"></i>Log Out</button>
                </form>
            </ul>
        </div>

        <div class="side-nav" id="side-navs">
            <ul>
                <a href="dashboard.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-pen-to-square"></i>Today</li>
                </a>
                <a href="addTask.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-plus"></i>Add Task</li>
                </a>
                <a href="rateMe.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-bookmark"></i>Rate Me</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-calendar-days"></i>Calendar</li>
                </a>
                <a href="addNote.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-pencil"></i>Add Experience</li>
                </a>
                <a href="myNote.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-book"></i>My Notebook</li>
                </a>
                <a href="monthPlan.php" class="nav-link  active">
                    <li class="nav-items"><i class="fa-solid fa-chart-simple"></i>Monthly Plan</li>
                </a>
                <a href="history.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-database"></i>History</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-bell"></i>Notification</li>
                </a>
                <a href="profile.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-user"></i>Profile</li>
                </a>
                <form action="../scripts/php/logout.php" method="POST">
                    <input type="hidden" value="<?php echo $row['unique_id'] ?>">
                    <button type="submit" name="logout" class="btn-logOut btn "><i class="fa-solid fa-right-from-bracket"></i>Log Out</button>
                </form>
            </ul>
        </div>

        <div class="main-content" id="main-content">

            <div class="card">
                <div class="greeting">
                    <h2><?php echo date('Y') ?> monthly plan</h2>
                    <p>Select a Month</p>
                </div>


                <div class="mth">
                    <div class="month-grid">
                        <div class="month">
                            <form action="./month.php" method="post">
                                <input type="hidden" value="01" name="monthNo">
                                <input type="hidden" value="31" name="days">
                                <input type="hidden" value="January" name="month">
                                <button type="submit" name="viewMonth" class="btn btn-primary">January</button>
                            </form>
                        </div>
                        <div class="month">
                            <form action="./month.php" method="post">
                                <input type="hidden" value="02" name="monthNo">
                                <input type="hidden" value="28" name="days">
                                <input type="hidden" value="February" name="month">
                                <button type="submit" name="viewMonth" class="btn btn-primary">February</button>
                            </form>
                        </div>
                        <div class="month">
                            <form action="./month.php" method="post">
                                <input type="hidden" value="03" name="monthNo">
                                <input type="hidden" value="31" name="days">
                                <input type="hidden" value="March" name="month">
                                <button type="submit" name="viewMonth" class="btn btn-primary">March</button>
                            </form>
                        </div>
                        <div class="month">
                            <form action="./month.php" method="post">
                                <input type="hidden" value="04" name="monthNo">
                                <input type="hidden" value="30" name="days">
                                <input type="hidden" value="April" name="month">
                                <button type="submit" name="viewMonth" class="btn btn-primary">April</button>
                            </form>
                        </div>
                        <div class="month">
                            <form action="./month.php" method="post">
                                <input type="hidden" value="05" name="monthNo">
                                <input type="hidden" value="31" name="days">
                                <input type="hidden" value="May" name="month">
                                <button type="submit" name="viewMonth" class="btn btn-primary">May</button>
                            </form>
                        </div>
                        <div class="month">
                            <form action="./month.php" method="post">
                                <input type="hidden" value="06" name="monthNo">
                                <input type="hidden" value="30" name="days">
                                <input type="hidden" value="June" name="month">
                                <button type="submit" name="viewMonth" class="btn btn-primary">June</button>
                            </form>
                        </div>
                        <div class="month">
                            <form action="./month.php" method="post">
                                <input type="hidden" value="07" name="monthNo">
                                <input type="hidden" value="31" name="days">
                                <input type="hidden" value="July" name="month">
                                <button type="submit" name="viewMonth" class="btn btn-primary">July</button>
                            </form>
                        </div>
                        <div class="month">
                            <form action="./month.php" method="post">
                                <input type="hidden" value="08" name="monthNo">
                                <input type="hidden" value="31" name="days">
                                <input type="hidden" value="August" name="month">
                                <button type="submit" name="viewMonth" class="btn btn-primary">August</button>
                            </form>
                        </div>
                        <div class="month">
                            <form action="./month.php" method="post">
                                <input type="hidden" value="09" name="monthNo">
                                <input type="hidden" value="30" name="days">
                                <input type="hidden" value="September" name="month">
                                <button type="submit" name="viewMonth" class="btn btn-primary">September</button>
                            </form>
                        </div>
                        <div class="month">
                            <form action="./month.php" method="post">
                                <input type="hidden" value="10" name="monthNo">
                                <input type="hidden" value="31" name="days">
                                <input type="hidden" value="October" name="month">
                                <button type="submit" name="viewMonth" class="btn btn-primary">October</button>
                            </form>
                        </div>
                        <div class="month">
                            <form action="./month.php" method="post">
                                <input type="hidden" value="11" name="monthNo">
                                <input type="hidden" value="30" name="days">
                                <input type="hidden" value="November" name="month">
                                <button type="submit" name="viewMonth" class="btn btn-primary">November</button>
                            </form>
                        </div>
                        <div class="month">
                            <form action="./month.php" method="post">
                                <input type="hidden" value="12" name="monthNo">
                                <input type="hidden" value="31" name="days">
                                <input type="hidden" value="December" name="month">
                                <button type="submit" name="viewMonth" class="btn btn-primary">December</button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>


        </div>


    </div>

    <script src="./js/script.js" type="text/javascript"></script>
</body>

</html>