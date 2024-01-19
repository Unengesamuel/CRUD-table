<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // picking the records to  be edited
    $query = "SELECT * FROM enter WHERE id='$id'";
    $result = mysqli_query($add, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $event_name = $row['event_name'];
        $event_date = $row['event_date'];
    } else {
        echo "Record not found.";
        exit();
    }
} else {
    echo "Invalid request. Missing ID.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <link rel="stylesheet" href="input.css">
</head>
<body>
    <h1 class="title">
        Edit your events
    </h1>
    <div>
        <form method="post" action="process_edit.php">
            <!-- the input on line 38 is a hidden field to pass the id to the process_edit.php -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            
            <input type="text" name="event" placeholder="Event" value="<?php echo $event_name; ?>"><br>
            <input type="text" name="event_date" placeholder="Event Date" value="<?php echo $event_date; ?>"><br>
            <input type="submit" class="submit" name="submit" value="Update">
        </form>
    </div>
    <button class="back"
        onclick="location.href='front.php'">
        back
    </button>
</body>
</html>