<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Delete Movies</title>
</head>
<body>
<h1>PSC - Staff Access : Delete Movies</h1>
<hr>
<?php
    include 'connectdb.php';
    
    function IsChecked($chkname,$connection)  {
        if (!empty($_POST[$chkname]))  {
            foreach($_POST[$chkname] as $value) {
                $delsql="delete from Movies where MovieID='" . $value . "'";
                deleteMovie($delsql,$connection,$value);
            }
        }
    }
    
    function deleteMovie($deleteCommand,$conn,$val) {
        if (mysqli_query($conn,$deleteCommand)) {
            echo "<p>Movie " . $val . " deleted successfully</p>";
        } else {
            echo "<p>Problem with deleting movie: " . mysqli_error($conn) . "</p>";
        }
    } //end of deleteMovie function
    
    IsChecked('themovies',$connection);
    mysqli_close($connection);
?>
</body>
</html>