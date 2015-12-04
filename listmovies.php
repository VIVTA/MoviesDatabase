<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : List Movies</title>
</head>
<body>
<h1>PSC - Staff Access : List Movies</h1>

<?php
    include 'connectdb.php' ?> 

<?php if ($_POST['order-by'] == "alphabetically") {
    $query = "select * from Movies order by MovieName";
    $result = mysqli_query($connection,$query);
    if (!$result) {
            die("databases query failed.");
    }
    echo "<table><tr><th>Name</th><th>ID</th><th>Year</th><th>Poster</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["MovieName"]."</td><td>".$row["MovieID"]."</td><td>".$row["Year"]."</td><td><img src=" . $row["Poster"] . " height=60 width=60></td><tr>";
    }
}
if ($_POST['order-by'] == "year") {
    $query = "select * from Movies order by Year";
    $result = mysqli_query($connection,$query);
    if (!$result) {
            die("databases query failed.");
    }
    echo "<table><tr><th>Name</th><th>ID</th><th>Year</th><th>Poster</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["MovieName"]."</td><td>".$row["MovieID"]."</td><td>".$row["Year"]."</td><td><img src=" . $row["Poster"] . " height=60 width=60></td><tr>";
    }
}
echo "</table>"; 
mysqli_free_result($result);
?>
<p><a href="staff.php">&larr; Return to staff page</a></p>

