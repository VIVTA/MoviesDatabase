<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Delete Movies</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>PSC - Staff Access : Delete Movies</h1>
<hr>
<?php
    include '../../connectdb.php';
    
    if (isset($_POST['movieid'])) {
        $delsql="delete from Movies where MovieID='" . $_POST['movieid'] . "'";
        if (mysqli_query($connection,$delsql)) {
            echo "<p>Movie " . $_POST['movieid'] . " deleted successfully!</p>";
        } else {
            echo "<p>Problem with deleting movie: " . mysqli_error($connnection) . "</p>";
        }
    } else {
        echo '<p>Error: you must select a movie to delete</p>';
    }
    
    mysqli_close($connection);
?>
<p><a href="../staff.php">&larr; Return to staff page</a></p>
</body>
</html>
