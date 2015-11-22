
<!DOCTYPE html>
<html>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are your showings:</h1>
<ol>
<?php
   $showingID = $_POST["ShowingID"];
   $date = $_POST["Date"];
   $time = $_POST["Time"];
   $movieID = $_POST["MovieID"];
   $roomNumber =$_POST["roomNumber"];
   $query = 'insert into Showings values("' . $showingID . '","' . $date . '","' . $time . '","' . $movieID . '","' . $roomNumber . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your showing was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
