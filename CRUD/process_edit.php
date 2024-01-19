<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $event = $_POST['event'];
    $event_date = $_POST['event_date'];

    $query = "UPDATE enter SET event_name='$event', event_date='$event_date' WHERE id='$id'";
    $result = mysqli_query($add, $query);

    if ($result) {
        header("location: front.php");
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>