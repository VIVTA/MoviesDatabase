<?php
    include 'connectdb.php'
?>

<?php
    $query = "select * from TheatreRooms";
    $result = mysqli_query($connection,$query);
    if (!$result) {
            die("databases query failed.");
    }
    echo "<table><tr><th>Room Number</th><th>Capacity</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["RoomNumber"]."</td><td>".$row["Capacity"]."</td><tr>";
    }
echo "</table>";
mysqli_free_result($result);
?>
