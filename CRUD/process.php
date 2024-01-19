<?php
include('connect.php');
if (isset($_POST["submit"])) {
    $event = $_POST['event'];
    $event_date = $_POST['event_date'];

   

    $sql = "insert into enter (event_name,event_date) values('$event','$event_date')";
 
    $result = mysqli_query($add,$sql);

    if($result){
        header("location:front.php");
    }else{
        echo "Oops something went wrong";
    }   
}

?> 