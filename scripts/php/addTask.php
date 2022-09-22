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
    $status = "Pending";


    if (!empty($task)) {
        $sql = mysqli_query($conn, "INSERT INTO task (date, unique_id, fullname, task, time, status)
                            VALUES ('{$date}', '{$user_id}', '{$fname}', '{$task}', '{$time}', '{$status}') ") or die();
    }
}