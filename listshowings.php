<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : List Showings</title>
</head>
<body>
<h1>PSC - Staff Access : List Showings</h1>

<?php
    include 'connectdb.php'
?>

<?php
$query = "select * from Showings";
$result = mysqli_query($connection,$query);
if (!$result) {
        die("databases query failed.");
}
echo "<table><tr><th>ShowingID</th><th>Date</th><th>Time</th><th>MovieID</th><th>RoomNumber</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["ShowingID"]."</td><td>".$row["Date"]."</td><td>".$row["Time"]."</td><td>".$row["MovieID"]."</td><td>".$row["RoomNumber"]."</td><tr>";
}
echo "</table>";
mysqli_free_result($result);
?>
<p><a href="staff.php">&larr; Return to staff page</a></p>

