<?php
   include '../../connectdb.php';
   foreach($_POST['thegenres'] as $value){
         list($movid,$movgenre) = explode('|', $value);
   }
   $query = "Select * from MovieGenres where MovieID='" . $movid . "' and Genre='" . $movgenre . "'";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   $row = mysqli_fetch_assoc($result);
   $movieid = $row["MovieID"];
   $moviegenre = $row["Genre"];
   mysqli_close($connection);
?>


