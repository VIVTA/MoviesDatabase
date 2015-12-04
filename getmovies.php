
<?php
   include 'connectdb.php';
?>

<?php
   $query = "select * from Movies";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="movies" required="required" value="';
        echo $row["MovieID"];
        echo '">' . $row["MovieName"]. "<br>";
   }
   mysqli_free_result($result);
?>
