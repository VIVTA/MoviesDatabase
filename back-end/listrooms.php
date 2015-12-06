<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : List Rooms</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>PSC - Staff Access : List Rooms</h1>
<hr>

<?php
    include '../connectdb.php'
?>

<?php
    $query = "select * from TheatreRooms";
    $result = mysqli_query($connection,$query);
    if (!$result) {
            die("databases query failed.");
    }
    echo "<table><thead><tr><th>RoomNumber</th><th>Capacity</th></tr></thead><tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["RoomNumber"]."</td><td>".$row["Capacity"]."</td><tr>";
    }
echo "</tbody></table>";
mysqli_free_result($result);
?>
<p><a href="staff.php">&larr; Return to staff page</a></p>

</body>
</html>