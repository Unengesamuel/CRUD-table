<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CRUD Table</title>
<link rel="stylesheet" href="front.css">
</head>
<body>
    <div>
        <h1 class="title">
            Schedule your Events
        </h1>
    </div>
    <div>
        <img class="add" src="add.png" alt="trah can"
        onclick="location.href='add.php'">
    </div>

    <div class="div2">
        <table>
            <thead>
                <tr>
                    <td class="head">
                        <h1>S/N</h1>
                    </td>
                    <td class="head">
                       <h1>Event</h1> 
                    </td>
                    <td class="head">
                       <h1>Event Date</h1>
                    </td>
                    <td class="head">
                        <h1>Edit Event </h1>
                    </td>
                    <td class="head">
                       <h1> Delete Event</h1>
                    </td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("connect.php");
                    $sql = "select *  from enter";

                    $result = mysqli_query($add,$sql);
                    
                    $count = 1;
                    while($row = mysqli_fetch_assoc($result)):
            ?>
                <tr>
                    <td class="data">
                            <?php echo $count++ ?>
                    </td>
                    <td class="data">
                             <?php echo $row['event_name']; ?>
                    </td>
                    <td class="data">
                    <?php echo $row['event_date']; ?>
                    </td>
                    <td class="data">
                        <a href="edit.php?id=<?php echo $row['id']?>">Edit</a>
                    </td>
                    <td class="data">
                    <a class="re" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
    </div>
    <div>
        <img class="trash" src="trash_can.png" alt="trah can"
        onclick="location.href='trash_can.php'">
    </div>
</body>
</html>