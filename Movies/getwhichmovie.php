<?php
   include 'connectdb.php';
   foreach($_POST['themovies'] as $checkbox){
        $selected_movie = $checkbox;
   }
   $query = "Select * from Movies where MovieID='" . $selected_movie . "';";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   $row = mysqli_fetch_assoc($result);
   $movietitle = $row["MovieName"];
   $movieyear = $row["Year"];
   mysqli_close($connection);
?>



