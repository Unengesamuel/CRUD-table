<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // seleting the event that is to be restored
    $query = "SELECT * FROM trash_can WHERE id='$id'";
    $result = mysqli_query($add, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Inserting the event back into the original table (which is the enter table)
        $insertQuery = "INSERT INTO enter (event_name, event_date) VALUES ('" . $row['event_name'] . "', '" . $row['event_date'] . "')";
        $insertResult = mysqli_query($add, $insertQuery);

        if ($insertResult) {
            // now, we need to delete the event from the trash_can table. Below is the query
            $deleteQuery = "DELETE FROM trash_can WHERE id='$id'";
            $deleteResult = mysqli_query($add, $deleteQuery);

            if ($deleteResult) {
                header("location: trash_can.php");
            } else {
                echo "Error deleting event from the trash can.";
            }
        } else {
            echo "Error restoring event to the main table.";
        }
    } else {
        echo "Record not found in the trash can.";
    }
} else {
    echo "Invalid request. Missing ID.";
}