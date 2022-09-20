<?php
//params to connection to a database
//for develpment stage
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "task-manager";



// connection to database
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die('database connection failed' . mysqli_connect_error());
}
