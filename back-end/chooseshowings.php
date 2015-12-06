<!DOCTYPE html> <html lang="en-US"> 
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : <?php echo($_POST['method']) ?> Showings</title> 
    <link rel="stylesheet" href="../style.css">
</head> 
<body> 
<h1>PSC - Staff Access : <?php echo($_POST['method']) ?> Showings</h1>
<hr>
<?php include '../connectdb.php';
    
    if (isset($_POST['method'])) {
            $result = mysqli_query($connection, 'SELECT * FROM Showings');
            
        if ($_POST['method']=="Delete") {
            if (mysqli_num_rows($result) > 0) {
                echo '<form action="actions/deleteshowing.php" method="POST"><table><thead><tr><th></th><th>ShowingID</th><th>Date</th><th>Time</th><th>MovieID</th><th>RoomNumber</th></tr></thead><tbody>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr><td><input type="radio" name="theshowings[]" required="required" value="' . $row['ShowingID'] . '"></td><td>' . $row['ShowingID'] . '</td><td>' . $row['Date'] . '</td><td>' . $row['Time'] . '</td><td>' . $row['MovieID'] . '</td><td>' . $row['RoomNumber'] . '</td></tr>';
                }
                echo '</tbody></table><br><input type="submit" value="' . $_POST['method'] . ' Showings"></form>';
            } else {
                echo '<p>There are no showings!</p>';
            }
        }
    
        if ($_POST['method']=="Update") {
            if (mysqli_num_rows($result) > 0) {
                echo '<form action="actions/updateshowing.php" method="POST"><table><thead><tr><th></th><th>ShowingID</th><th>Date</th><th>Time</th><th>MovieID</th><th>RoomNumber</th></tr></thead><tbody>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr><td><input type="radio" name="theshowings[]" required="required" value="' . $row['ShowingID'] . '"></td><td>' . $row['ShowingID'] . '</td><td>' . $row['Date'] . '</td><td>' . $row['Time'] . '</td><td>' . $row['MovieID'] . '</td><td>' . $row['RoomNumber'] . '</td></tr>';
                }
                echo '</tbody></table><br><input type="submit" value="' . $_POST['method'] . ' Showings"></form>';
            } else {
                echo '<p>There are no showings!</p>';
            }
        }
    }
    mysqli_close($connection); ?> 
</body>
</html>
