<?php
session_start();

include_once "dbconn.php";

if (isset($_POST['deletePlan'])) {
    $plan_id = mysqli_real_escape_string($conn, $_POST['id']);

    $query = "DELETE FROM plans WHERE plan_id ='$plan_id' ";
    $query_run = mysqli_query($conn, $query);
    header("location: ../../dashboard/month.php");
}
