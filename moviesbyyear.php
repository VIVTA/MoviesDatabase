
<?php
   $query = "select distinct Year from Movies order by Year";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="Year" value="';
        echo '">' . $row["Year"]. "<br>";
   }
   mysqli_free_result($result);
?>


