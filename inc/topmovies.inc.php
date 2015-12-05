<h2>Top Movies (Rating > 4 stars)</h2>
<?php
	$sql = 'SELECT MovieName, AVG(Rating) AS AVGRating FROM Selection, Movies, Showings WHERE Selection.ShowingID = Showings.ShowingID AND Showings.MovieID = Movies.MovieID GROUP BY Movies.MovieID HAVING AVGRating >= 4 ORDER BY AVGRating DESC';
	
	$result = mysqli_query($connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
    	echo '<table style="width: 50%;"><thead><tr><th>Movie Title</th><th>Average Rating</th></tr></thead><tbody>';
    	// output data of each row
    	while ($row = mysqli_fetch_assoc($result)) {
        	echo '<tr><td>' . $row['MovieName'] . '</td><td>' . $row['AVGRating'] . '</td></tr>';
    	}
    	echo '</tbody></table>';
	} else {
    	echo '<p>No genres found.</p>';
	}
?>
<br>