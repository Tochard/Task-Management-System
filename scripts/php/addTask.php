<?php
session_start();

include_once "dbconn.php";

if (isset($_SESSION['unique_id'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $task = mysqli_real_escape_string($conn, $_POST['task']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    date_default_timezone_set('Africa/lagos');
    $date = date('m/d/Y');
    $day = date('l');
    $month = date('F');
    $year = date('Y');
    $status = "Pending";
    $task_id = rand(time(), 10000000);
    // $rating = 0;

    if (!empty($task)) {
        $sql = mysqli_query($conn, "INSERT INTO task (date, day, month, year, unique_id, fullname, task, time, task_id, status)
                            VALUES ('{$date}', '{$day}', '{$month}', '{$year}', '{$user_id}', '{$fname}', '{$task}', '{$time}', '{$task_id}', '{$status}') ") or die();
    }
}
