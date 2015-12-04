<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Showing</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<h1>PSC - Staff Access : Add Showing</h1>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
<?php
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
        echo "Showing " . $ShowingID . " was added!";

   mysqli_close($connection);
?>
</ol>
<p><a href="staff.php">&larr; Return to staff page</a></p>

</body>


