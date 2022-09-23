<?php

session_start();

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
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-pen-to-square"></i>Plan Today</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-plus"></i>Add Task</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-calendar-days"></i>Calendar</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-bookmark"></i>Rate Me</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-pencil"></i>Add Experience</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-book"></i>My Notebook</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-chart-simple"></i>Monthly Plan</li>
                </a>
                <a href="#" class="nav-link">
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
                    <button type="submit" name="logout" class="btn-logOut btn ">Log Out</button>
                </form>
            </ul>
        </div>

        <div class="side-nav" id="side-navs">
            <ul>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-pen-to-square"></i>Plan Today</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-plus"></i>Add Task</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-calendar-days"></i>Calendar</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-bookmark"></i>Rate Me</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-pencil"></i>Add Experience</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-book"></i>My Notebook</li>
                </a>
                <a href="#" class="nav-link">
                    <li class="nav-items"><i class="fa-solid fa-chart-simple"></i>Monthly Plan</li>
                </a>
                <a href="#" class="nav-link">
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
                    <button type="submit" name="logout" class="btn-logOut btn ">Log Out</button>
                </form>
            </ul>
        </div>

        <div class="main-content" id="main-content">

            <div class="card">
                <div class="greeting">
                    <p>GOOD <?php
                            $hour = date('H');
                            $dayTerm = ($hour > 16) ? "EVENING" : (($hour > 12) ? "AFTERNOON" : "MORNING");
                            echo $dayTerm;
                            ?>,</p>
                    <h2>Welcome, <?php echo $row['fullname'] ?></h2>
                </div>
                <div class="heading">
                    <h3 class="heading__title">Today, <?php echo date('l') ?> <span class="heading__title--date"><?php echo $row['date'] ?></span></h3>
                    <div>
                        <button class="btn btn-primary" id="addTask"><i class="fa-solid fa-plus"></i> Add Task</button>
                    </div>
                </div>

                <div class="form" id="taskForm">
                    <div class="form-sect">
                        <h3 class="about-title">Add To Today Task</h3>

                        <form action="#" method="" id="todayTask">
                            <div class="st-inp">
                                <input type="hidden" name="user_id" value="<?php echo $row['unique_id'] ?>">
                                <input type="hidden" name="fname" value="<?php echo $row['fullname'] ?>">
                                <div class="st-a">
                                    <label for="Task" class="label">Task</label>
                                    <input type="text" name="task" class="inp tsk">
                                </div>
                                <div class=" st-a">
                                    <label for="time" class="label">Time</label>
                                    <input type="time" name="time" class="inp tim">
                                </div>
                            </div>
                            <button type=" submit" name="add" class="btn btn-primary btn-form" id="addToTask">Add</button>
                        </form>
                        <!-- <form action="../scripts/php/addTask.php" method="POST">
                            <div class="st-inp">
                                <div class="st-a">
                                    <label for="Task" class="label">Task</label>
                                    <input type="email" name="email" class="inp">
                                </div>
                                <div class="st-a">
                                    <label for="time" class="label">Time</label>
                                    <input type="time" name="time" class="inp">
                                </div>
                            </div>
                            <button type="submit" name="add" class="btn btn-primary btn-form">Add</button>
                        </form> -->
                    </div>

                </div>

                <div class="table-wrapper">


                    <table>
                        <thead>
                            <th>Task</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Action</th>

                        </thead>
                        <tbody class="task-table">
                            <!-- fetch data -->

                        </tbody>
                    </table>


                </div>
                <form action="#" method="POST">
                    <button type="submit" name="rateMe" class="btn btn-primary btn-form">Rate Me</button>
                </form>
                <!-- <form action="#" method="" id="delTask33">
                    <input type="hidden" name="id" value="'. $row['task_id'] .'">
                    <button class="btn__action btn-red" id="del33"><i class="fa-solid fa-trash"></i></button>
                </form> -->
            </div>

            <div class="form">
                <div class="form-sect">
                    <h3 class="about-title">Add Experience</h3>

                    <form action="#" method="POST">
                        <div class="st-inp">
                            <div class="st-a">
                                <label for="date" class="label">Date</label>
                                <input type="date" name="date" class="inp">
                            </div>
                            <div class="st-a">
                                <label for="time" class="label">Time</label>
                                <input type="time" name="time" class="inp">
                            </div>
                        </div>

                        <label for="note" class="label">Note</label>
                        <textarea name="note" id="" cols="30" rows="10" class="inp"></textarea>
                        <button type="submit" name="add" class="btn btn-primary btn-form">Add Experience</button>
                    </form>
                </div>
            </div>

            <div class="footer">
                <p class="copyright">
                    &copy; 2022 <a href="">Tochard</a>. All Right Reserved
                </p>
            </div>
        </div>


    </div>


    <script src="../scripts/js/addTask.js" type="text/javascript"></script>
    <script src="./js/script.js" type="text/javascript"></script>
</body>

</html>