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
                <a href="#" class="nav-link active">
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
                <a href="#" class="nav-link active">
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
                <div class="greeting">
                    <p>History</p>
                    <h2>Month of <?php echo date('F') ?></h2>
                </div>

                <div class="table-wrapper">

                    <table>
                        <thead>
                            <th>Days</th>
                            <th>Date</th>
                            <th>View Tasks</th>
                        </thead>
                        <tbody class="task-table">

                            <?php
                            $month = date('F');
                            $query = mysqli_query($conn, "SELECT * FROM task WHERE unique_id = {$_SESSION['unique_id']} AND month = '{$month}' GROUP BY date");
                            if (mysqli_num_rows($query) > 0) {
                                while ($row2 = mysqli_fetch_assoc($query)) {

                            ?>

                                    <tr>
                                        <td><?php echo $row2['day'] ?></td>
                                        <td><?php echo $row2['date'] ?></td>
                                        <td>
                                            <form action="./viewTask.php" method="POST">
                                                <input type="hidden" name="date" value="<?php echo $row2['date'] ?>">
                                                <button class="btn btn-primary btn-green" name="view" type="submit"><i class="fa-solid fa-eye"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>


                </div>


            </div>

            <div class="form box">
                <div class="form-sect">
                    <h3 class="about-title">Search History</h3>

                    <form action="./monthHist.php" method="POST">
                        <div class="st-inp">
                            <div class="st-a">
                                <label for="month" class="label">Month</label>
                                <select name="month" class="inp" style="width:100%;" required>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                            <div class="st-a">
                                <label for="year" class="label">Year</label>
                                <select name="year" class="inp" style="width:100%;" required>
                                    <option value="2020">2017</option>
                                    <option value="2020">2018</option>
                                    <option value="2020">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022" selected>2022</option>
                                    <option value="2023">2023</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" name="check" class="btn btn-primary btn-form">Check History</button>
                    </form>
                </div>
            </div>


            <!-- <div class="footer">
                <p class="copyright">
                    &copy; 2022 <a href="">Tochard</a>. All Right Reserved
                </p>
            </div> -->
        </div>


    </div>

    <script src="../scripts/js/editTask.js" type="text/javascript"></script>
    <script src="../scripts/js/addTask.js" type="text/javascript"></script>
    <script src="./js/script.js" type="text/javascript"></script>
</body>

</html>