
<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // this to fecth the records to move to the trash can
    $query = "SELECT * FROM enter WHERE id='$id'";
    $result = mysqli_query($add, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // this is to insert it into the trash_can table created in mysql 
        $insertQuery = "INSERT INTO trash_can (event_name, event_date) VALUES ('" . $row['event_name'] . "', '" . $row['event_date'] . "')";
        $insertResult = mysqli_query($add, $insertQuery);

        if ($insertResult) {
            // Now, delete the event from the original table 
            $deleteQuery = "DELETE FROM enter WHERE id='$id'";
            $deleteResult = mysqli_query($add, $deleteQuery);

            if ($deleteResult) {
                header("location: front.php");
            } else {
                echo "Error deleting event.";
            }
        } else {
            echo "Error moving event to trash can.";
        }
    } else {
        echo "Record not found.";
    }
} else {
    echo "Invalid request. Missing ID.";
}
