<?php
session_start();

include_once "dbconn.php";

if (isset($_SESSION['unique_id'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $month = date('F');
    $status = "Pending";
    $note_id = rand(time(), 10000000);
    // $rating = 0;

    if (!empty($task)) {
        $sql = mysqli_query($conn, "INSERT INTO task (date, day, month, year, unique_id, fullname, task, time, task_id, status)
                            VALUES ('{$date}', '{$day}', '{$month}', '{$year}', '{$user_id}', '{$fname}', '{$task}', '{$time}', '{$task_id}', '{$status}') ") or die();
    }
}


CREATE TABLE experience (
	id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    fullname varchar(255) NOT NULL,
    unique_id int(200) NOT NULL,
    month varchar(255) NOT NULL,
    date varchar(255) NOT NULL,
    time varchar(500) NOT NULL,
    note varchar(500) NOT NULL,
    note_id varchar(255) NOT NULL
)