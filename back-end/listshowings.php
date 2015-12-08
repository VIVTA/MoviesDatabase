<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : List Showings</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>PSC - Staff Access : List Showings</h1>
<hr>

<?php
    include '../connectdb.php'
?>

<?php
$query = "select * from Showings";
$result = mysqli_query($connection,$query);
if (!$result) {
        die("databases query failed.");
}
echo "<table><thead><tr><th>ShowingID</th><th>Date</th><th>Time</th><th>MovieID</th><th>RoomNumber</th></tr></thead><tbody>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["ShowingID"]."</td><td>".$row["Date"]."</td><td>".$row["Time"]."</td><td>".$row["MovieID"]."</td><td>".$row["RoomNumber"]."</td><tr>";
}
echo "</tbody></table>";
mysqli_free_result($result);
mysqli_close($connection);
?>
<p><a href="staff.php">&larr; Return to staff page</a></p>

</body>
</html>
