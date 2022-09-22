<?php
include "dbconn.php";
session_start();

if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['unique_id']);
    // header("location: .../auth/login.php");
    header("location: ../../auth/login.php");
}
