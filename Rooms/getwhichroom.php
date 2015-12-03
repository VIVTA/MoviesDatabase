<?php
   include 'connectdb.php';
   foreach($_POST['therooms'] as $checkbox){
        $selected_room = $checkbox;
   }
   $query = "Select * from TheatreRooms where RoomNumber='" . $selected_room . "';";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   $row = mysqli_fetch_assoc($result);
   $roomnumber = $row["RoomNumber"];
   $roomcapacity = $row["Capacity"];
   mysqli_close($connection);
?>

