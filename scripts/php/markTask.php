<?php
session_start();

include_once "dbconn.php";

if (isset($_SESSION['unique_id'])) {
    $task_id = mysqli_real_escape_string($conn, $_POST['id']);
    $status = "Done";

    $query = "UPDATE task SET status ='{$status}'  WHERE task_id ='{$task_id}' ";
    $query_run = mysqli_query($conn, $query);
    // header("location: ../../dashboard/dashboard.php");
}
