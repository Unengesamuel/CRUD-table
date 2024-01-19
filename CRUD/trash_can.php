<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="trash_can.css">
</head>
<body>
    <h1 class="title">
        Trash Can
    </h1>
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
                    <td>
                        <h1>Restore Event</h1>
                    </td>
                    <td>
                        <h1>Delete Permanently</h1>
                    </td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include("connect.php");
                    $sql = "select *  from trash_can";

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
                        <a href="restore.php?id=<?php echo $row['id']?>"> restore</a>
                    </td>
                    <td class="data">
                        <a href="permanent_delete.php?id=<?php echo $row['id']?>">delete</a>
                    </td>
                </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>

        <button class="back"
        onclick="location.href='front.php'">
            back
        </button>
</body>
</html>