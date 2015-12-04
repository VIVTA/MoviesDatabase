<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : List Rooms</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<h1>PSC - Staff Access : List Rooms</h1>

<?php
    include 'connectdb.php'
?>

<?php
    $query = "select * from TheatreRooms";
    $result = mysqli_query($connection,$query);
    if (!$result) {
            die("databases query failed.");
    }
    echo "<table><tr><th>RoomNumber</th><th>Capacity</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["RoomNumber"]."</td><td>".$row["Capacity"]."</td><tr>";
    }
echo "</table>";
mysqli_free_result($result);
?>
<p><a href="staff.php">&larr; Return to staff page</a></p>

