<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : List Movie Genres</title>
</head>
<body>
<h1>PSC - Staff Access : List Movie Genres</h1>

<?php
    include 'connectdb.php'
?>

<?php
    $query = "select * from MovieGenres,Movies where MovieGenres.MovieID = Movies.MovieID;";
    $result = mysqli_query($connection,$query);
    if (!$result) {
            die("databases query failed.");
    }
    echo "<table><tr><th>MovieID</th><th>MovieName</th><th>MovieGenres</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["MovieID"]."</td><td>".$row["MovieName"]."</td><td>".$row["Genre"]."</td><tr>";
    }
echo "</table>";
mysqli_free_result($result);
?>
<p><a href="staff.php">&larr; Return to staff page</a></p>

