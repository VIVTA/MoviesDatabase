<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Staff Movie Screenings</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>PSC Staff Movie Screenings Database</h1>
<h2>Our Showings</h2>
<?php
   include 'allshowings.php';
?>
<p>
<hr>
<p>
<h2> ADD A NEW SHOWING:</h2>
<form action="addnewshowing.php" method="post">
New Showing ID: <input type="text" name="ShowingID"><br>
New Date: <input type="text" name="Date"><br>
New Time: <input type="text" name="Time"><br>
New Movie ID: <input type="text" name="MovieID"><br>
New Room Number: <input type="text" name="RoomNumber"><br>
<input type="submit" value="Add New Showing">
</form>
<?php
mysqli_close($connection);
?>
</body>
</html>

