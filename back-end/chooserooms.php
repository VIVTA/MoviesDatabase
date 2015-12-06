<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : <?php echo($_POST['method']) ?> Rooms</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>PSC - Staff Access : <?php echo($_POST['method']) ?> Rooms</h1>
<hr>
<?php
    include '../connectdb.php';
    
    if (isset($_POST['method'])) {
            $result = mysqli_query($connection, 'SELECT * FROM TheatreRooms');
            
        if ($_POST['method']=="Delete") {
    // List movies
            if (mysqli_num_rows($result) > 0) {
                echo '<form action="actions/deleteroom.php" method="POST"><table><thead><tr><th></th><th>RoomNumber</th><th>Capacity</th></tr></thead><tbody>';
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr><td><input type="radio" name="therooms[]" required="required" value="' . $row['RoomNumber'] . '"></td><td>' . $row['RoomNumber'] . '</td><td>' . $row['Capacity'] . '</td></tr>';
                }
                echo '</tbody></table><br><input type="submit" value="' . $_POST['method'] . ' Rooms"></form>';
            } else {
                echo '<p>There are no rooms!</p>';
            }
        }
    
        if ($_POST['method']=="Update") {
            if (mysqli_num_rows($result) > 0) {
                echo '<form action="actions/updateroom.php" method="POST"><table><thead><tr><th></th><th>RoomNumber</th><th>Capacity</th></tr></thead><tbody>';
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr><td><input type="radio" name="therooms[]" required="required" value="' . $row['RoomNumber'] . '"></td><td>' . $row['RoomNumber'] . '</td><td>' . $row['Capacity'] . '</td></tr>';
                }
                echo '</tbody></table><br><input type="submit" value="' . $_POST['method'] . ' Rooms"></form>';
            } else {
                echo '<p>There are no rooms!</p>';
            }
        }
    }
    
    mysqli_close($connection);
?>
</body>
</html>
