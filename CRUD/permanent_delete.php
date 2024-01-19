<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // here is to the event permantly from the trash_can table
    $deleteQuery = "DELETE FROM trash_can WHERE id='$id'";
    $deleteResult = mysqli_query($add, $deleteQuery);

    if ($deleteResult) {
        header("location: trash_can.php");
    } else {
        echo "Error permanently deleting event from the trash can.";
    }
} else {
    echo "Invalid request. Missing ID.";
}