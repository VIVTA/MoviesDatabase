<h2>Number of Movies per Genre</h2>
<?php
	$sql = 'SELECT Genre, COUNT(*) AS Number FROM MovieGenres GROUP BY Genre';
	
	$result = mysqli_query($connection, $sql);
	
	if (mysqli_num_rows($result) > 0) {
    	echo '<table style="width: 50%;"><thead><tr><th>Genre</th><th>Number of Movies</th></tr></thead><tbody>';
    	// output data of each row
    	while ($row = mysqli_fetch_assoc($result)) {
        	echo '<tr><td>' . $row['Genre'] . '</td><td>' . $row['Number'] . '</td></tr>';
    	}
    	echo '</tbody></table>';
	} else {
    	echo '<p>No genres found.</p>';
	}
?>
<br>