<!DOCTYPE html> <html lang="en-US"> <head>
    <meta charset="UTF-8">
    <title>PSC - Staff : <?php echo($_POST['method']) ?> Customers</title> </head> <body> <h1>PSC - Staff Access : <?php echo($_POST['method']) ?> Customers</h1> <hr> <?php include 'connectdb.php';
    
    if (isset($_POST['method'])) {
            $result = mysqli_query($connection, 'SELECT * FROM Customers');
            
        if ($_POST['method']=="Delete") {
            if (mysqli_num_rows($result) > 0) {
                echo '<form action="deletecustomer.php" method="POST"><table><thead><tr><th></th><th>CustomerID</th><th>FirstName</th><th>LastName</th><th>Sex</th><th>Email</th></tr></thead><tbody>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr><td><input type="radio" name="thecustomers[]" required="required" value="' . $row['CustomerID'] . '"></td><td>' . $row['CustomerID'] . '</td><td>' . $row['FirstName'] . '</td><td>' . $row['LastName'] . '</td><td>' . $row['Sex'] . '</td><td>' . $row['Email'] . '</td></tr>';
                }
                echo '</tbody></table><br><input type="submit" value="' . $_POST['method'] . ' Customers"></form>';
            } else {
                echo '<p>There are no customers!</p>';
            }
        }
    
        if ($_POST['method']=="Update") {
            if (mysqli_num_rows($result) > 0) {
                echo '<form action="updatecustomer.php" method="POST"><table><thead><tr><th></th><th>CustomerID</th><th>FirstName</th><th>LastName</th><th>Sex</th><th>Email</th></tr></thead><tbody>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr><td><input type="radio" name="thecustomers[]" required="required" value="' . $row['CustomerID'] . '"></td><td>' . $row['CustomerID'] . '</td><td>' . $row['FirstName'] . '</td><td>' . $row['LastName'] . '</td><td>' . $row['Sex'] . '</td><td>' . $row['Email'] . '</td></tr>';
                }
                echo '</tbody></table><br><input type="submit" value="' . $_POST['method'] . ' Customers"></form>';
            } else {
                echo '<p>There are no customers!</p>';
            }
        }
    }
    mysqli_close($connection); ?> 
</body>
</html>

