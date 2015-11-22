<?php
$query = "select * from Showings";
$result = mysqli_query($connection,$query);
if (!$result) {
        die("databases query failed.");
}
echo "<table><tr><th>ID</th><th>Date</th><th>Time</th><th>MovieID</th><th>Room</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["ShowingID"]."</td><td>".$row["Date"]."</td><td>".$row["Time"]."</td><td>".$row["MovieID"]."</td><td>".$row["RoomNumber"]."</td><tr>";
}
echo "</table>";
mysqli_free_result($result);
?>
