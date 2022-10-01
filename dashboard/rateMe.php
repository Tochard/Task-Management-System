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
                    <img src="./images/pro.jpg" alt="profile" class="profile-img">
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
                <a href="#" class="nav-link">
                    <li class="nav-items  active"><i class="fa-solid fa-bookmark"></i>Rate Me</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-calendar-days"></i>Calendar</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-pencil"></i>Add Experience</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-book"></i>My Notebook</li>
                </a>
                <a href="monthPlan.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-chart-simple"></i>Monthly Plan</li>
                </a>
                <a href="history.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-database"></i>History</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-bell"></i>Notification</li>
                </a>
                <a href="#" class="nav-link">
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
                <a href="#" class="nav-link  active">
                    <li class="nav-items"><i class="fa-solid fa-bookmark"></i>Rate Me</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-calendar-days"></i>Calendar</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-pencil"></i>Add Experience</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-book"></i>My Notebook</li>
                </a>
                <a href="monthPlan.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-chart-simple"></i>Monthly Plan</li>
                </a>
                <a href="history.php" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-database"></i>History</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-bell"></i>Notification</li>
                </a>
                <a href="#" class="nav-link">
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
                <div class="rate-date">
                    <h3 class="heading__title">Today, <?php echo date('l') ?> <span class="heading__title--date"><?php echo $row['date'] ?></span></h3>
                </div>

                <?php

                date_default_timezone_set('Africa/lagos');
                $date = date('m/d/Y');

                $totalTaskQuery = mysqli_query($conn, "SELECT * FROM task WHERE unique_id = {$_SESSION['unique_id']}  AND date = '{$date}'");
                $totalTask =  mysqli_num_rows($totalTaskQuery);


                $completedTaskQuery = mysqli_query($conn, "SELECT * FROM task WHERE unique_id = {$_SESSION['unique_id']}  AND date = '{$date}' AND status = 'Done'");
                $completedTask = mysqli_num_rows($completedTaskQuery);



                if (mysqli_num_rows($totalTaskQuery) > 0) {
                    $rating = round(($completedTask / $totalTask) * 100);
                ?>


                    <div class="greeting rating">
                        <h2>Hi, <?php echo $row['fullname'] ?></h2>
                        <h1>Your Today Productivity Rating:</h1>
                        <h1 class="rate-per"><?php echo $rating ?>%</h1>
                        <?php
                        if ($rating >= 90) {
                        ?>
                            <div>
                                <img src="./images/100.png" alt="">
                                <h2>Impressive Performance</h2>
                                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Non dolorum a officiis, beatae laborum in."<br>~ james brake</p>
                            </div>
                        <?php
                        } elseif ($rating >= 60) {
                        ?>
                            <div>
                                <img src="./images/60.png" alt="">
                                <h2>Great Performance</h2>
                                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Non dolorum a officiis, beatae laborum in."<br>~ james brake</p>
                            </div>
                        <?php
                        } elseif ($rating >= 30) {
                        ?>
                            <div>
                                <img src="./images/30.png" alt="">
                                <h2>Fair Performance</h2>
                                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Non dolorum a officiis, beatae laborum in."<br>~ james brake</p>
                            </div>
                        <?php
                        } elseif ($rating >= 0) {
                        ?>
                            <div>
                                <img src="./images/00.png" alt="">
                                <h2>Poor Performance</h2>
                                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Non dolorum a officiis, beatae laborum in."<br>~ james brake</p>
                            </div>
                        <?php
                        }
                        ?>
                    </div>

                <?php
                } else {
                ?>
                    <div class="greeting rating">
                        <h2>Hi, <?php echo $row['fullname'] ?></h2>
                        <h1>Your Today Productivity Rating:</h1>
                        <h1 class="rate-per">0%</h1>
                        <div>
                            <img src="./images/none.png" alt="">
                            <h2>No Task Added Today</h2>
                            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Non dolorum a officiis, beatae laborum in."<br>~ james brake</p>
                        </div>
                    </div>

                <?php
                }
                ?>
                <div class="see-task-btn">
                    <a href="dashboard.php"><button class="btn btn-primary"> See Today Task</button></a>
                </div>


            </div>



            <!-- <div class="footer">
                <p class="copyright">
                    &copy; 2022 <a href="">Tochard</a>. All Right Reserved
                </p>
            </div> -->
        </div>


    </div>

    <script src="./js/script.js" type="text/javascript"></script>
</body>

</html>