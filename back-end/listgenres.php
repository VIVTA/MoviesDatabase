<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : List Movie Genres</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>PSC - Staff Access : List Movie Genres</h1>
<hr>

<?php
    include '../connectdb.php'
?>

<?php
    $query = "select * from MovieGenres,Movies where MovieGenres.MovieID = Movies.MovieID;";
    $result = mysqli_query($connection,$query);
    if (!$result) {
            die("databases query failed.");
    }
    echo "<table><thead><tr><th>MovieID</th><th>MovieName</th><th>MovieGenres</th></tr></thead><tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["MovieID"]."</td><td>".$row["MovieName"]."</td><td>".$row["Genre"]."</td><tr>";
    }
echo "</tbody></table>";
mysqli_free_result($result);
mysqli_close($connection);
?>
<p><a href="staff.php">&larr; Return to staff page</a></p>

</body>
</html>
