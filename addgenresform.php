<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Movie Genres</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<h1>PSC - Staff Access : Add Movie Genres</h1>
<hr>
<form action="addagenre.php" method="POST">
<h3>Movies</h3> 
<?php include 'getmovies.php' ?>      
<h3>Genres</h3>
<input type="radio" name="movie-genre" required="required" value="Action"> Action
<input type="radio" name="movie-genre" value="Animated"> Animated
<input type="radio" name="movie-genre" value="Comedy"> Comedy
<input type="radio" name="movie-genre" value="Drama"> Drama
<input type="radio" name="movie-genre" value="Romance"> Romance
<input type="radio" name="movie-genre" value="SciFi"> SciFi
<br>
<br>
<input type="submit" value="Add Movies">

</body>
</html>
