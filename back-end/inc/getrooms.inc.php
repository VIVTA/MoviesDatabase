<?php
    if ($level == 1) {
        include '../connectdb.php';
    } else {
        include '../../connectdb.php';
    }
?>
<?php
  
   $query = "select * from TheatreRooms";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="rooms" required="required" value="';
        echo $row["RoomNumber"];
        if ($showingroom == $row["RoomNumber"]) {
            echo '" checked>' . $row["RoomNumber"]. "<br>";
        } else {
            echo '">' . $row["RoomNumber"]. "<br>";
        }
   }
   mysqli_free_result($result);
?>
