<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PSC - Ticket Desk : Ticket Sale</title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>PSC - Ticket Desk : Ticket Sale</h1>
<hr>
<?php
	if (isset($_POST['submit']) && $_POST['customerid'] <> "" && $_POST['showingid'] <> "" && $_POST['price'] <> "") {
    	include '../connectdb.php';
    	
    	$sql = 'INSERT INTO Selection (CustomerID, ShowingID, Price) VALUES (' . $_POST['customerid'] . ', ' . $_POST['showingid'] . ', ' . $_POST['price'] . ')';
    	
    	if (mysqli_query($connection, $sql)) {
            echo '<p>Ticket sold successfully</p><p><a href="../ticketing.php">&larr; Return to ticketing page</a></p>';
        } else {
            echo '<p>Ticket sale could not be completed: ' . mysqli_error($connection);
        }
    	        
        mysqli_close($connection);
    } else {
        echo '<p>Error: You must fill in all fields of the "Purchase a Ticket" form.</p>';
    }
?>
</body>
</html>