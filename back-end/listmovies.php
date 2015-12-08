<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : List Movies</title>
     <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>PSC - Staff Access : List Movies</h1>
<hr>

<?php
    include '../connectdb.php' ?> 

<?php if ($_POST['order-by'] == "alphabetically") {
    $query = "select * from Movies order by MovieName";
    $result = mysqli_query($connection,$query);
    if (!$result) {
            die("databases query failed.");
    }
    echo "<table><thead><tr><th>Name</th><th>ID</th><th>Year</th><th>Poster</th></tr></thead><tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        $poster = "";
        if ($row["Poster"]) {
            $poster = "<a href='" . $row["Poster"] . "'><img src=" . $row["Poster"] . " height='90px' width='60px'></a>";
        }
        echo "<tr><td>".$row["MovieName"]."</td><td>".$row["MovieID"]."</td><td>".$row["Year"]."</td><td>" . $poster . "</td></tr>";
    }
}
if ($_POST['order-by'] == "year") {
    $query = "select * from Movies order by Year";
    $result = mysqli_query($connection,$query);
    if (!$result) {
            die("databases query failed.");
    }
    echo "<table><thead><tr><th>Name</th><th>ID</th><th>Year</th><th>Poster</th></tr></thead><tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        $poster = "";
        if ($row["Poster"]) {
            $poster = "<a href='" . $row["Poster"] . "'><img src=" . $row["Poster"] . " height='90px' width='60px'></a>";
        }
        echo "<tr><td>".$row["MovieName"]."</td><td>".$row["MovieID"]."</td><td>".$row["Year"]."</td><td>" . $poster . "</td><tr>";
    }
}
echo "</tbody></table>"; 
mysqli_free_result($result);
mysqli_close($connection);
?>
<p><a href="staff.php">&larr; Return to staff page</a></p>

</body>
</html>
