<?php
session_start();
include_once "dbconn.php";


if (isset($_POST['markPlan'])) {

    $plan_id = mysqli_real_escape_string($conn, $_POST['id']);

    // $query = "SELECT * FROM task WHERE task_id ='$task_id' ";
    // $query_run = mysqli_query($conn, $query);
    // $result = mysqli_fetch_assoc($query_run);

    // $status = $result['status'];


    $nstatus = "Done";
    $sql = "UPDATE plans SET status ='$nstatus' WHERE plan_id = $plan_id ";
    $sql_run = mysqli_query($conn, $sql);

    if ($sql_run) {
        // $_SESSION['success'] = 'Account Deactivated';
        header("location: ../../dashboard/month.php");
    } else {
        // $_SESSION['status'] = 'Error';
        header('location: ../../dashboard/month.php?error');
    }
}
