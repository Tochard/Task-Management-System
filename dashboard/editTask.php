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
    // include_once "../scripts/php/dbconn.php";
    // $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    // if (mysqli_num_rows($sql) > 0) {
    //     $row = mysqli_fetch_assoc($sql);
    // }
    // 
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
                <a href="monthPlan.php" class="nav-link">
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
                <a href="monthPlan.php" class="nav-link">
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

            <div class="form-sect card">
                <h3 class="about-title">Edit Task</h3>



                <?php



                if (isset($_POST['editTask'])) {

                    $task_id = mysqli_real_escape_string($conn, $_POST['id']);

                    $query = "SELECT * FROM task WHERE task_id = $task_id ";
                    $query_run = mysqli_query($conn, $query);
                    $result = mysqli_fetch_assoc($query_run);
                ?>



                    <form action="../scripts/php/editTask.php" method="POST">
                        <div class="st-inp">


                            <div class="st-a">
                                <label for="Task" class="label">Task</label>
                                <input type="text" name="task" class="inp tsk" value="<?php echo $result['task'] ?>">
                            </div>
                            <div class=" st-a">
                                <label for="time" class="label">Time</label>
                                <input type="time" name="time" class="inp tim" value="<?php echo $result['time'] ?>">
                            </div>
                        </div>
                        <!-- <div>
                            <label for="status" class="label">Status</label>
                            <input type="text" name="status" class="inp result" value="">
                        </div> -->

                        <label for="status" class="label">Status</label>
                        <?php
                        $status = $result['status'];

                        if ($status == "Pending") {
                        ?>
                            <div class="radio-select">
                                <div class="radio-btn">
                                    <input type="radio" id="Pending" name="status" value="Pending" checked>
                                    <label for="Pending">Pending</label>
                                </div>

                                <div class="radio-btn">
                                    <input type="radio" id="Done" name="status" value="Done">
                                    <label for="Done">Done</label>
                                </div>
                            </div>
                        <?php
                        } elseif ($status == "Done") {
                        ?>
                            <div class="radio-select">
                                <div class="radio-btn">
                                    <input type="radio" id="Pending" name="status" value="Pending">
                                    <label for="Pending">Pending</label>
                                </div>

                                <div class="radio-btn">
                                    <input type="radio" id="Done" name="status" value="Done" checked>
                                    <label for="Done">Done</label>
                                </div>
                            </div>

                        <?php
                        }

                        ?>
                        <input type="hidden" name="id" value=" <?php echo $result['task_id'] ?>">
                        <button type=" submit" name="update" class="btn btn-primary btn-form" id="update">Update</button>
                    </form>


                <?php
                }
                ?>
            </div>


        </div>


    </div>

    <script src="../scripts/js/editTask.js" type="text/javascript"></script>
    <script src="../scripts/js/addTask.js" type="text/javascript"></script>
    <script src="./js/script.js" type="text/javascript"></script>
</body>

</html>