<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PSC - Ticket Desk : Update Rating</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>PSC - Ticket Desk : Update Rating</h1>
<hr>
<?php
	if (isset($_POST['submit']) && $_POST['customerid'] <> "" && $_POST['showingid'] <> "" && isset($_POST['star'])) {
    	include 'connectdb.php';
    	
    	$sql = 'UPDATE Selection SET Rating = ' . $_POST['star'] . ' WHERE CustomerID = ' . $_POST['customerid'] . ' AND ShowingID = ' . $_POST['showingid'];
    	
    	if (mysqli_query($connection, $sql)) {
            echo '<p>Rating updated successfully</p><p><a href="ticketing.php">&larr; Return to ticketing page</a></p>';
        } else {
            echo '<p>Rating update could not be completed: ' . mysqli_error($connection);
        }
    	        
        mysqli_close($connection);
    } else {
        echo '<p>Error: You must fill in all fields of the "Rate a Showing" form.</p>';
    }
?>
</body>
</html>