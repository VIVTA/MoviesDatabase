<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Delete Movie Genres</title>
</head>
<body>
<h1>PSC - Staff Access : Delete Movie Genres</h1>
<hr>
<?php
    include 'connectdb.php';
    
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
            echo "Genre deleted successfully!";
        } else {
            echo "<p>Problem with deleting genre: " . mysqli_error($conn) . "</p>";
        }
    } //end of deleteGenre function
    
    IsChecked('thegenres',$connection);
    mysqli_close($connection);
?>
<p><a href="staff.php">&larr; Return to staff page</a></p>
</body>
</html>
