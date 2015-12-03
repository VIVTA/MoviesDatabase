<?php
   $query = "select * from TheatreRooms";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="checkbox" name="therooms[]" value="';
        echo $row["RoomNumber"];
        echo '">' . $row["RoomNumber"]. "<br>";
   }
   mysqli_free_result($result);
?>
