<?php
   include '../../connectdb.php';
   
   if (isset($_POST['movieid'])) {
       $selected_movie = $_POST['movieid'];
       $query = "Select * from Movies where MovieID='" . $selected_movie . "'";
       $result = mysqli_query($connection,$query);
       if (!$result) {
          die("Database query failed");
       }
       $row = mysqli_fetch_assoc($result);
       $movietitle = $row["MovieName"];
       $movieyear = $row["Year"];
   } else {
       echo '<p>Error: you must select a movie to update</p>';
   }
   
   mysqli_close($connection);
?>

