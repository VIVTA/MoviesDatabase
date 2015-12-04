<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Movie Genre</title>
</head>
<body>
<h1>PSC - Staff Access : Add Movie Genre</h1>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
<?php
   $movie = $_POST["movies"];
   $genre = $_POST["movie-genre"];
   $query = 'insert into MovieGenres values("' . $movie . '","' . $genre . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
        }
        echo "Genre " . $genre . " for Movie " . $movie . " was added!";

   mysqli_close($connection);
?>
</ol>
<p><a href="staff.php">&larr; Return to staff page</a></p>
</body>

