<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="input.css">
</head>
<body>
    <h1 class="title">
        Schedule your events
    </h1>
    <div>
        <form method="post" action="process.php">
            <input type="text" name="event" placeholder="Event"><br>
            <input type="text" name="event_date" placeholder="Event Date"><BR>
            <input type="submit" class="submit" name="submit" value="Submit">
        </form>
    </div>
   <button class="back"
     onclick="location.href='front.php'"> 
        back
   </button>
</body>
</html>