<!DOCTYPE html> 
<html lang="en-US"> 
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : <?php echo($_POST['method']) ?> Movie Genres</title> 
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>PSC - Staff Access : <?php echo($_POST['method']) ?> Movie Genres</h1>
<hr> 

<?php  include '../connectdb.php';
    if (isset($_POST['method'])) {
         $result = mysqli_query($connection, 'SELECT * FROM MovieGenres,Movies where MovieGenres.MovieID=Movies.MovieID');
        if ($_POST['method']=="Delete") {
            if (mysqli_num_rows($result) > 0) {
                echo '<form action="actions/deletegenre.php" method="POST" onsubmit="return confirm(\'Are you sure?\');"><table><thead><tr><th></th><th>MovieID</th><th>Title</th><th>Genre</th></tr></thead><tbody>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr><td><input type="radio" name="thegenres[]" required="required" value="' . $row['MovieID'] . '|' . $row['Genre'] . '"></td><td>' . $row['MovieID'] . '</td><td>' . $row['MovieName'] . '</td><td>' . $row['Genre'] . '</td></tr>';
                }
                echo '</tbody></table><br><input type="submit" value="' . $_POST['method'] . ' Movie Genres"></form>';
            } else {
                echo '<p>There are no movies with genres!</p>';
            }
        }
    
        if ($_POST['method']=="Update") {
            if (mysqli_num_rows($result) > 0) {
                echo '<form action="actions/updategenre.php" method="POST"><table><thead><tr><th></th><th>MovieID</th><th>Title</th><th>Genre</th></tr></thead><tbody>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr><td><input type="radio" name="thegenres[]" required="required" value="' . $row['MovieID'] . '|' . $row['Genre'] . '"></td><td>' . $row['MovieID'] . '</td><td>' . $row['MovieName'] . '</td><td>' . $row['Genre'] . '</td></tr>';
                }
                echo '</tbody></table><br><input type="submit" value="' . $_POST['method'] . ' Movies Genres"></form>';
            } else {
                echo '<p>There are no movies with genres!</p>';
            }
        }
    }
    
    mysqli_close($connection); 
?> 
</body>
</html>