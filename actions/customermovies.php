<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PSC - Ticket Desk : List Viewed Movies</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>PSC - Ticket Desk : List Viewed Movies</h1>
<hr>
<?php
	if (isset($_POST['submit']) && $_POST['customerid'] <> "") {
    	echo '<h2>Showings Viewed by Customer ' . $_POST['customerid'] . '</h2>';
    	
    	include '../connectdb.php';
    	
    	$sql = 'SELECT Movies.MovieName, Rating FROM Customers, Selection, Showings, Movies WHERE Customers.CustomerID = Selection.CustomerID AND Selection.ShowingID = Showings.ShowingID AND Showings.MovieID = Movies.MovieID AND Customers.CustomerID = ' . $_POST['customerid'];
    	
    	$result = mysqli_query($connection, $sql);
    	
    	if (mysqli_num_rows($result) > 0) {
        	echo '<table><thead><tr><th>Movie Title</th><th>Rating</th></tr></thead><tbody>';
        	// output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr><td>' . $row['MovieName'] . '</td><td>' . starRating($row['Rating']) . '</td></tr>';
            }
            echo '</tbody></table><p><a href="../ticketing.php">&larr; Return to ticketing page</a></p>';
        
        mysqli_close($connection);
    	} else {
        	echo '<p>Customer ' .  $_POST['customerid']. ' has not viewed any showings.</p><p><a href="../ticketing.php">&larr; Return to ticketing page</a></p>';
        }
	} else {
    	echo '<p>Error: You must select a customer.</p><p><a href="../ticketing.php">&larr; Return to ticketing page</a></p>';
	}
	
	function starRating($strRating) {
    	$intRating = intval($strRating);
    	
    	if ($intRating === 1) {
        	return '<div class="stars">
<input class="star star-5" type="radio" disabled="disabled">
<label class="star star-5"></label>
<input class="star star-4" type="radio" disabled="disabled">
<label class="star star-4"></label>
<input class="star star-3" type="radio" disabled="disabled">
<label class="star star-3"></label>
<input class="star star-2" type="radio" disabled="disabled">
<label class="star star-2"></label>
<input class="star star-1" type="radio" disabled="disabled" checked>
<label class="star star-1"></label>
</div>';
    	} elseif ($intRating === 2) {
        	return '<div class="stars">
<input class="star star-5" type="radio" disabled="disabled">
<label class="star star-5"></label>
<input class="star star-4" type="radio" disabled="disabled">
<label class="star star-4"></label>
<input class="star star-3" type="radio" disabled="disabled">
<label class="star star-3"></label>
<input class="star star-2" type="radio" disabled="disabled" checked>
<label class="star star-2"></label>
<input class="star star-1" type="radio" disabled="disabled">
<label class="star star-1"></label>
</div>';
    	} elseif ($intRating === 3) {
        	return '<div class="stars">
<input class="star star-5" type="radio" disabled="disabled">
<label class="star star-5"></label>
<input class="star star-4" type="radio" disabled="disabled">
<label class="star star-4"></label>
<input class="star star-3" type="radio" disabled="disabled" checked>
<label class="star star-3"></label>
<input class="star star-2" type="radio" disabled="disabled">
<label class="star star-2"></label>
<input class="star star-1" type="radio" disabled="disabled">
<label class="star star-1"></label>
</div>';
    	} elseif ($intRating === 4) {
        	return '<div class="stars">
<input class="star star-5" type="radio" disabled="disabled">
<label class="star star-5"></label>
<input class="star star-4" type="radio" disabled="disabled" checked>
<label class="star star-4"></label>
<input class="star star-3" type="radio" disabled="disabled">
<label class="star star-3"></label>
<input class="star star-2" type="radio" disabled="disabled">
<label class="star star-2"></label>
<input class="star star-1" type="radio" disabled="disabled">
<label class="star star-1"></label>
</div>';
    	} elseif ($intRating === 5) {
        	return '<div class="stars">
<input class="star star-5" type="radio" disabled="disabled" checked>
<label class="star star-5"></label>
<input class="star star-4" type="radio" disabled="disabled">
<label class="star star-4"></label>
<input class="star star-3" type="radio" disabled="disabled">
<label class="star star-3"></label>
<input class="star star-2" type="radio" disabled="disabled">
<label class="star star-2"></label>
<input class="star star-1" type="radio" disabled="disabled">
<label class="star star-1"></label>
</div>';
    	} else {
        	return '<div class="stars">
<input class="star star-5" type="radio" disabled="disabled">
<label class="star star-5"></label>
<input class="star star-4" type="radio" disabled="disabled">
<label class="star star-4"></label>
<input class="star star-3" type="radio" disabled="disabled">
<label class="star star-3"></label>
<input class="star star-2" type="radio" disabled="disabled">
<label class="star star-2"></label>
<input class="star star-1" type="radio" disabled="disabled">
<label class="star star-1"></label>
</div>';
    	}
	}
?>
</body>
</html>