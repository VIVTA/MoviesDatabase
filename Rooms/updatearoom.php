<?php
   include 'connectdb.php';
   $roomnumb = $_POST['roomnum'];
   $newcap = $_POST['roomcap'];
   $query = 'Update TheatreRooms set Capacity="' . $newcap . '" where RoomNumber="' . $roomnumb . '"';
   echo $query;
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "Room updated successfully";
   } else {
      echo "Error when updating room: " . mysqli_error($connection);
   }
   mysqli_close($connection);
?>


