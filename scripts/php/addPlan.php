<?php
session_start();

include_once "dbconn.php";

if (isset($_SESSION['unique_id'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $plan = mysqli_real_escape_string($conn, $_POST['plan']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $month = mysqli_real_escape_string($conn, $_POST['month']);
    $year = date('Y');
    $status = "Pending";
    $plan_id = rand(time(), 10000000);
    // $rating = 0;

    if (!empty($plan)) {
        $sql = mysqli_query($conn, "INSERT INTO plans (fullname, unique_id, year, month, date, plan, plan_id, status )
                            VALUES ('{$fname}', '{$user_id}', '{$year}', '{$month}', '{$date}', '{$plan}', '{$plan_id}', '{$status}') ") or die();
    }
}
