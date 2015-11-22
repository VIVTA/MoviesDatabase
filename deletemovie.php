

<!DOCTYPE html>
<html>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are your movies:</h1>
<ol>
<?php
   $movieName= $_POST["MovieName"];
   $movieID = $_POST["MovieID"];
   $movieYear =$_POST["MovieYear"];
   $query = 'delete from Movies where (MovieID="' . $movieID . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your movie was deleted!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>


