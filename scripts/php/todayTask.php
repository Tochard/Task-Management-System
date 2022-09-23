<?php
session_start();
include "dbconn.php";

date_default_timezone_set('Africa/lagos');
$date = date('m/d/Y');

$query = "SELECT * FROM task WHERE unique_id = {$_SESSION['unique_id']} AND date = '{$date}' ORDER BY id ASC";
$query_run = mysqli_query($conn, $query);

if (mysqli_num_rows($query_run) > 0) {
    while ($row2 = mysqli_fetch_assoc($query_run)) {
        $output = '<tr>
                    <td>' . $row2['task'] . '</td>
                    <td>' . $row2['time'] . '</td>
                    <td class="status pending">' . $row2['status'] . '</td>
                    <td  class="act-btn">
                        <form action="../scripts/php/deleteTask.php" method="POST">
                            <input type="hidden" name="id" value="' . $row2['task_id'] . '">
                            <button class="btn__action btn-red" type = "submit"><i class="fa-solid fa-trash"></i></button>
                        </form>
                        <form action="../scripts/php/editTask.php" method="POST">
                            <input type="hidden" name="id" value=" ' . $row2['task_id'] . ' ?>">
                            <button class="btn__action btn-org" type = "submit" ><i class="fa-solid fa-pen-to-square"></i></button>
                        </form>
                        <form action="../scripts/php/markTask.php" method="POST">
                            <input type="hidden" name="id" value=" ' . $row2['task_id'] . '">
                            <button class="btn__action btn-green" type = "submit" ><i class="fa-regular fa-square-check"></i></button>
                        </form>
                </tr>';

        echo $output;
    }
} else {
    echo "<h3 style = 'color: #eb3838; margin: 20px;'>No Task Yet</h3>";
}
