<h2>Ticket Sales by Genre</h2>
<?php
	$sql = 'SELECT Genre, SUM(Price) AS Sales FROM Showings JOIN Selection ON Selection.ShowingID = Showings.ShowingID RIGHT JOIN MovieGenres ON MovieGenres.MovieID = Showings.MovieID GROUP BY Genre';
	
	$result = mysqli_query($connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
    	echo '<table style="width: 50%;"><thead><tr><th>Genre</th><th>Sales</th></tr></thead><tbody>';
    	// output data of each row
    	while ($row = mysqli_fetch_assoc($result)) {
        	$sales = $row['Sales'];
        	if (!$sales) {
            	$sales = '0.00';
        	}
        	echo '<tr><td>' . $row['Genre'] . '</td><td>$' . $sales . '</td></tr>';
    	}
    	echo '</tbody></table>';
	} else {
    	echo '<p>No genres found.</p>';
	}
?>
<br>