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
<h2>Our Movies</h2>
<?php
   include 'allmovies.php';
?>
<h3>Movies By Year</h3>
<form action="getmoviesbyyear.php" method="post">
<?php
   include 'moviesbyyear.php';
?>
<input type="submit" value="Get Movie">
</form>
<p>
<hr>
<p>
<h2> ADD A NEW MOVIE:</h2>
<form action="addnewmovie.php" method="post">
New Movie Name: <input type="text" name="MovieName"><br>
New Movie ID: <input type="text" name="MovieID"><br>
New Movie Year: <input type="text" name="MovieYear"><br>
<input type="submit" value="Add New Movie">
</form>
<?php
mysqli_close($connection);
?>
</body>
</html>
