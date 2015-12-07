<?php
   include '../../connectdb.php';
   
   if (isset($_POST['therooms'])) {
       
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
       
       $roomSelected = True;
   } else {
       echo '<p>Error: you must select a room.</p>';
       $roomSelected = False;
   }
   mysqli_close($connection);
?>

