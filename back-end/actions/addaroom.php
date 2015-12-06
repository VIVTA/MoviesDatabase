<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Room</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>PSC - Staff Access : Add Room</h1>
<hr>
<?php
   include '../../connectdb.php';
?>
<?php
   $roomCapacity = $_POST["newroomcap"];
   $roomNumber = $_POST["RoomNumber"];
   $query = 'select max(RoomNumber) as maxid from TheatreRooms';
   $result=mysqli_query($connection,$query);
   if (!$result) {
        die("database max query failed.");
        }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
   $RoomID = (string)$newkey;
   $query = 'insert into TheatreRooms values("' . $RoomID . '","' . $roomCapacity . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
        }
        echo "<p>Room " . $RoomID . " was added!</p>";

   mysqli_close($connection);
?>
<p><a href="../staff.php">&larr; Return to staff page</a></p>

</body>
</html>