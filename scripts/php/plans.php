<?php
session_start();
include "dbconn.php";
// include "../../dashboard/month.php";
// date_default_timezone_set('Africa/lagos');
// $date = date('m/d/Y');

$query = "SELECT * FROM plans WHERE unique_id = {$_SESSION['unique_id']}  AND month = '{$_SESSION['month']}'ORDER BY id ASC";
$query_run = mysqli_query($conn, $query);

if (mysqli_num_rows($query_run) > 0) {
    while ($row2 = mysqli_fetch_assoc($query_run)) {
        $output = '<tr>
                    <td>' . $row2['plan'] . '</td>
                    <td>' . $row2['date'] . '</td>';

        if ($row2['status'] == 'Pending') {
            $output2 =  '<td class="status pending">' . $row2['status'] . '</td>';
        } else {
            $output2 =  '<td class="status done">' . $row2['status'] . '</td>';
        }
        $output3 = ' <td>
                        <form action="../scripts/php/deletePlan.php" method="POST">
                            <input type="hidden" name="id" value="' . $row2['plan_id'] . '">
                            <button class="btn btn__action btn-primary btn-red" type = "submit" name= "deletePlan"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                    <td >
                        <form action="./editPlan.php" method="POST">
                            <input type="hidden" name="id" value=" ' . $row2['plan_id'] . '">
                            <button class="btn btn__action btn-primary btn-org" type = "submit" name= "editPlan"><i class="fa-solid fa-pen-to-square"></i></button>
                        </form>
                    </td>
                    <td>
                        <form action="../scripts/php/markPlan.php" method="POST">
                            <input type="hidden" name="id" value=" ' . $row2['plan_id'] . '">
                            <button class="btn btn__action btn-primary btn-green" type = "submit" name= "markPlan"><i class="fa-regular fa-square-check"></i></button>
                        </form>
                    </td>
                    <td>
                        <form action="../scripts/php/notify.php" method="POST">
                            <input type="hidden" name="id" value=" ' . $row2['plan_id'] . '">
                            <button class="btn btn__action btn-blue" type = "submit" name= "notify"><i class="fa-regular fa-bell"></i></button>
                        </form>
                    </td>
                </tr>';

        echo $output . $output2 . $output3;
    }
} else {
    echo "<h3 style = 'color: #eb3838; margin: 20px;'>No Plan</h3>";
}
