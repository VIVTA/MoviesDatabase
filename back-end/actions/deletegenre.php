<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Delete Movie Genres</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>PSC - Staff Access : Delete Movie Genres</h1>
<hr>
<?php
    include '../../connectdb.php';
    
    if (isset($_POST['thegenres'])) {
    
        function IsChecked($chkname,$connection)  {
            if (!empty($_POST[$chkname]))  {
                foreach($_POST[$chkname] as $value) {
                    list($keyid,$keygenre) = explode('|', $value);
                    $delsql= 'delete from MovieGenres where MovieID="' . $keyid . '"and Genre="' . $keygenre . '"';
                    deleteGenre($delsql,$connection,$value);
                }
            }
        }
        
        function deleteGenre($deleteCommand,$conn,$val) {
            if (mysqli_query($conn,$deleteCommand)) {
                echo "<p>Genre deleted successfully!</p>";
            } else {
                echo "<p>Problem with deleting genre: " . mysqli_error($conn) . "</p>";
            }
        } //end of deleteGenre function
        
        IsChecked('thegenres',$connection);
    
    } else {
        echo '<p>Error: you must select a genre.</p>';
    }
    
    mysqli_close($connection);
?>
<p><a href="../staff.php">&larr; Return to staff page</a></p>
</body>
</html>
