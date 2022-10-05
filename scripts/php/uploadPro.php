<?php
session_start();
include "dbconn.php";

if (isset($_FILES['image']['name'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];

    $imageName = $_FILES['image']['name'];
    $imageSize = $_FILES['image']['size'];
    $tmpName = $_FILES['image']['tmp_name'];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $imageName);
    $imageExtension = strtolower(end($imageExtension));

    if (!in_array($imageExtension, $validImageExtension)) {
        echo
        "
            <script>
                alert('Invalid Image Extension');
                document.location.href = '../../dashboard/profile.php';
            </script>
            ";
    } elseif ($imageSize > 1200000) {
        echo
        "
            <script>
                alert('Image Size is too large');
                document.location.href = '../../dashboard/profile.php';
            </script>
            ";
    } else {
        $newImageName = $name . "-" . date("Y.m.d") . "-" . date("h.i.sa") . "." . $imageExtension;

        $query = "UPDATE users SET proImg = '$newImageName' WHERE unique_id = $id";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            move_uploaded_file($tmpName, '../../dashboard/uploads/' . $newImageName);
            echo "<script>
                document.location.href = '../../dashboard/profile.php';
            </script>";
        }
    }
}
