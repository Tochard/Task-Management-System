<?php
session_start();
include "dbconn.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
date_default_timezone_set('Africa/lagos');
$date = date('m/d/Y');
$proImg = "default.jpg";


if (!empty($fname) && !empty($email) && !empty($password)) {

    //checking email validity
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        //checking if email already exist in database
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) {
            echo "$email - This email already exist!";
        } else {
            $randon_id = rand(time(), 10000000); //creating random id for user

            //Inserting users data into user table
            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fullname, email, password, date, proImg ) 
                    VALUES ({$randon_id}, '{$fname}', '{$email}', '{$password}', '{$date}', '{$proImg}' ) ");
            if ($sql2) {
                // if these data inserted
                //Send Sucess Email to user


                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                if (mysqli_num_rows($sql3) > 0) {
                    $row = mysqli_fetch_assoc($sql3);
                    $_SESSION['unique_id'] = $row['unique_id']; //using this session we used user unique_id in the other php files
                    // $_SESSION['login_time'] = time();
                    echo "success";
                } else {
                    echo "Something went wrong!";
                }
            }
        }
    } else {
        echo "$email - This email is not valid ";
    }
} else {
    echo "All input fields are required!";
}
