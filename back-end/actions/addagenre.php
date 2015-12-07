<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Movie Genre</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>PSC - Staff Access : Add Movie Genre</h1>
<body>
<?php
   include '../../connectdb.php';
?>
<?php
    $movie = $_POST["movies"];
    $genre = $_POST["movie-genre"];
   
    if (isset($movie) && isset($genre)) {
   
        $query = 'insert into MovieGenres values("' . $movie . '","' . $genre . '")';
        if (!mysqli_query($connection, $query)) {
            die("Error: insert failed - " . mysqli_error($connection));
        }
            echo "<p>Genre " . $genre . " for Movie " . $movie . " was added!</p>";
    } else {
        echo '<p>Error: you must select a movie and genre.</p>';
    }
   mysqli_close($connection);
?>
<p><a href="../staff.php">&larr; Return to staff page</a></p>
</body>

