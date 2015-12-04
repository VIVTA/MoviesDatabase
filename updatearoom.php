<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Update Room</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<h1>PSC - Staff Access : Update Room</h1>

<?php
   include 'connectdb.php';
   $roomnumb = $_POST['roomnum'];
   $newcap = $_POST['roomcap'];
   $query = 'Update TheatreRooms set Capacity="' . $newcap . '" where RoomNumber="' . $roomnumb . '"';
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "Room " . $roomnumb . " updated successfully";
   } else {
      echo "Error when updating room: " . mysqli_error($connection);
   }
   mysqli_close($connection);
?>

<p><a href="staff.php">&larr; Return to staff page</a></p>

