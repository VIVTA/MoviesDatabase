<?php
   $query = "select * from Movies";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "</br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="checkbox" name="themovies[]" value="';
        echo $row["MovieID"];
        echo '">' . $row["MovieName"]. "<br>";
   }
   mysqli_free_result($result);
?>


