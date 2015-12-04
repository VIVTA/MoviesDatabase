<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Delete Showings</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<h1>PSC - Staff Access : Delete Showings</h1>
<hr>
<?php
    include 'connectdb.php';
    
    function IsChecked($chkname,$connection)  {
        if (!empty($_POST[$chkname]))  {
            foreach($_POST[$chkname] as $value) {
                $delsql="delete from Showings where ShowingID='" . $value . "'";
                deleteShowing($delsql,$connection,$value);
            }
        }
    }
    
    function deleteShowing($deleteCommand,$conn,$val) {
        if (mysqli_query($conn,$deleteCommand)) {
            echo "<p>Showing " . $val . " deleted successfully</p>";
        } else {
            echo "<p>Problem with deleting showing: " . mysqli_error($conn) . "</p>";
        }
    }    
    IsChecked('theshowings',$connection);
    mysqli_close($connection);
?>
<p><a href="staff.php">&larr; Return to staff page</a></p>

</body>
</html>
