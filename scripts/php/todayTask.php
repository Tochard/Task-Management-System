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
                     <td>
                         <div class="action">
                            <button class="btn__action btn-red"><i class="fa-solid fa-trash"></i></button>
                            <button class="btn__action btn-org"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="btn__action btn-green"><i class="fa-regular fa-square-check"></i></button>
                         </div>
                     </td>
                 </tr>';

        echo $output;
    }
} else {
    echo "<h3 style = 'color: #eb3838; margin: 20px;'>No Task Yet</h3>";
}
