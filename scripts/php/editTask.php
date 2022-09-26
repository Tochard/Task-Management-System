<?php
session_start();
include_once "dbconn.php";


if (isset($_POST['update'])) {

    $task_id = mysqli_real_escape_string($conn, $_POST['id']);
    $task = mysqli_real_escape_string($conn, $_POST['task']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $sql = "UPDATE task SET task ='$task', time = '$time', status ='$status' WHERE task_id = $task_id ";
    $sql_run = mysqli_query($conn, $sql);

    if ($sql_run) {
        // $_SESSION['success'] = 'Account Deactivated';
        header("location: ../../dashboard/dashboard.php");
    } else {
        // $_SESSION['status'] = 'Error';
        header('location: ../../dashboard/dashboard.php?error');
    }
}
