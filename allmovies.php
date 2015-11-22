
<?php
$query = "select * from Movies order by MovieName";
$result = mysqli_query($connection,$query);
if (!$result) {
        die("databases query failed.");
}
echo "<table><tr><th>Name</th><th>ID</th><th>Year</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["MovieName"]."</td><td>".$row["MovieID"]."</td><td>".$ro$
}
echo "</table>";
mysqli_free_result($result);
?>


