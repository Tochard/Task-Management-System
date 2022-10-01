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
                    <td>' . $row2['time'] . '</td>';

        if ($row2['status'] == 'Pending') {
            $output2 =  '<td class="status pending">' . $row2['status'] . '</td>';
        } else {
            $output2 =  '<td class="status done">' . $row2['status'] . '</td>';
        }
        $output3 = ' <td>
                        <form action="../scripts/php/deleteTask.php" method="POST">
                            <input type="hidden" name="id" value="' . $row2['task_id'] . '">
                            <button class="btn btn__action btn-primary btn-red" type = "submit" name= "deleteTask"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                    <td >
                        <form action="./editTask.php" method="POST">
                            <input type="hidden" name="id" value=" ' . $row2['task_id'] . '">
                            <button class="btn btn__action btn-primary btn-org" type = "submit" name= "editTask"><i class="fa-solid fa-pen-to-square"></i></button>
                        </form>
                    </td>
                    <td>
                        <form action="../scripts/php/markTask.php" method="POST">
                            <input type="hidden" name="id" value=" ' . $row2['task_id'] . '">
                            <button class="btn btn__action btn-primary btn-green" type = "submit" name= "markTask"><i class="fa-regular fa-square-check"></i></button>
                        </form>
                    </td>
                    <td>
                        <form action="../scripts/php/notify.php" method="POST">
                            <input type="hidden" name="id" value=" ' . $row2['task_id'] . '">
                            <button class="btn btn__action btn-blue" type = "submit" name= "notify"><i class="fa-regular fa-bell"></i></button>
                        </form>
                    </td>
                </tr>';

        echo $output . $output2 . $output3;
    }
} else {
    echo "<h3 style = 'color: #eb3838; margin: 20px;'>No Task</h3>";
}
