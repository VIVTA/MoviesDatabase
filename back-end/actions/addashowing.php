<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Showing</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>PSC - Staff Access : Add Showing</h1>
<hr>
<body>
<?php
   include '../../connectdb.php';
?>
<?php
   if (isset($_POST["movies"]) && isset($_POST["rooms"])) {
       $showingDate = $_POST["showdate"];
       $showingTime = $_POST["showtime"];
       $showID = $_POST["ShowingID"];
       $showingMovie = $_POST["movies"];
       $showingRoom = $_POST["rooms"];
       $query='select max(ShowingID) as maxid from Showings';
       $result=mysqli_query($connection,$query);
       if (!$result) {
            die("database max query failed.");
            }
       $row=mysqli_fetch_assoc($result);
       $newkey = intval($row["maxid"]) + 1;
       $ShowingID = (string)$newkey;
       $query = 'insert into Showings values("' . $ShowingID . '","' . $showingDate . '","' . $showingTime . '","' . $showingMovie . '","' . $showingRoom . '")';
       if (!mysqli_query($connection, $query)) {
            die("Error: insert failed" . mysqli_error($connection));
            }
            echo "<p>Showing " . $ShowingID . " was added!</p>";
   } else {
       echo '<p>Error: you must select a movie and theatre room.</p>';
   }
   mysqli_close($connection);
?>
<p><a href="../staff.php">&larr; Return to staff page</a></p>

</body>


