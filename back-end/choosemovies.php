<!DOCTYPE html> 
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : <?php echo($_POST['method']) ?> Movies</title> 
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>PSC - Staff Access : <?php echo($_POST['method']) ?> Movies</h1> 
<hr>
<?php  include '../connectdb.php';
    
    if (isset($_POST['method'])) {
            $result = mysqli_query($connection, 'SELECT * FROM Movies');
            
        if ($_POST['method']=="Delete") {
    // List movies
            if (mysqli_num_rows($result) > 0) {
                echo '<form action="actions/deletemovie.php" method="POST" onsubmit="return confirm(\'Are you sure?\');"><table><thead><tr><th></th><th>Movie ID</th><th>Title</th><th>Year</th></tr></thead><tbody>';
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr><td><input type="radio" name="themovies[]" required="required" value="' . $row['MovieID'] . '"></td><td>' . $row['MovieID'] . '</td><td>' . $row['MovieName'] . '</td><td>' . $row['Year'] . '</td></tr>';
                }
                echo '</tbody></table><br><input type="submit" value="' . $_POST['method'] . ' Movies"></form>';
            } else {
                echo '<p>There are no movies!</p>';
            }
        }
    
        if ($_POST['method']=="Update") {
            if (mysqli_num_rows($result) > 0) {
                echo '<form action="actions/updatemovie.php" method="POST"><table><thead><tr><th></th><th>MovieID</th><th>Title</th><th>Year</th></tr></thead><tbody>';
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr><td><input type="radio" name="themovies[]" required="required" value="' . $row['MovieID'] . '"></td><td>' . $row['MovieID'] . '</td><td>' . $row['MovieName'] . '</td><td>' . $row['Year'] . '</td></tr>';
                }
                echo '</tbody></table><br><input type="submit" value="' . $_POST['method'] . ' Movies"></form>';
            } else {
                echo '<p>There are no movies!</p>';
            }
        }
    }
    
    mysqli_close($connection); ?> </body>
</html>
