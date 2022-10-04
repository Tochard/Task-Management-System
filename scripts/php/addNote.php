<?php
session_start();

include_once "dbconn.php";

if (isset($_SESSION['unique_id'])) {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    $month = date('F');
    $note_id = rand(time(), 10000000);
    // $rating = 0;

    if (!empty($note) && !empty($date) && !empty($time)) {
        $sql = mysqli_query($conn, "INSERT INTO experience ( fullname, unique_id, date, time, month, note, note_id )
                            VALUES ( '{$fname}', '{$user_id}', '{$date}', '{$time}', '{$month}', '{$note}', '{$note_id}') ") or die();
        echo "Experience Added to NoteBook";
    } else{
        echo "Input Cannot Be Blank";
    }
}


