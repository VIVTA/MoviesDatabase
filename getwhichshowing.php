<?php
   include 'connectdb.php';
   foreach($_POST['theshowings'] as $checkbox){
	$selected_showing = $checkbox;
   }
   $query = "Select * from Showings where ShowingID='" . $selected_showing . "';";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   $row = mysqli_fetch_assoc($result);
   $showingdate = $row["Date"];
   $showingtime = $row["Time"];
   $showingmovie = $row["MovieID"];
   $showingroom = $row["RoomNumber"];
   mysqli_close($connection);
?>
