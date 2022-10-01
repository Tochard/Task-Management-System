<?php
session_start();
include_once "dbconn.php";


if (isset($_POST['update'])) {

    $plan_id = mysqli_real_escape_string($conn, $_POST['id']);
    $plan = mysqli_real_escape_string($conn, $_POST['plan']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    $sql = "UPDATE plans SET plan ='$plan', date = '$date', status ='$status' WHERE plan_id = $plan_id ";
    $sql_run = mysqli_query($conn, $sql);

    if ($sql_run) {
        header("location: ../../dashboard/month.php");
    } else {
        header('location: ../../dashboard/month.php?error');
    }
}
