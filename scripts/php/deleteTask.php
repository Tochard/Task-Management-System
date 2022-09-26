<?php
session_start();

include_once "dbconn.php";

if (isset($_POST['deleteTask'])) {
    $task_id = mysqli_real_escape_string($conn, $_POST['id']);

    $query = "DELETE FROM task WHERE task_id ='$task_id' ";
    $query_run = mysqli_query($conn, $query);
    header("location: ../../dashboard/dashboard.php");
}
