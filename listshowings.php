<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PSC - Ticket Desk : List Showings</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="clearfix">
<h1>PSC - Ticket Desk : List Showings</h1>
<hr>
<?php
    if (isset($_POST['submit'])) {
        
        if ($_POST['filter'] == "movie") {
            
            if ($_POST['movieid'] <> "") {
                include 'connectdb.php';
                
                $posterSQL = 'SELECT Poster FROM Movies WHERE MovieID = ' . $_POST['movieid'];
                
                $result = mysqli_query($connection, $posterSQL);
                
                if (mysqli_num_rows($result) > 0) {
                    // get poster
                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($row['Poster']) {
                            echo '<img src="' . $row['Poster'] . '" width="240px" height="360px" style="float:left;">';
                        }
                    }
                }
                
                // the showings with available seats
            	$availableSQL = 'SELECT DISTINCT Showings.ShowingID, DATE_FORMAT(Date,"%W %b. %D, %Y") AS date, DATE_FORMAT(Time, "%r") AS time, TheatreRooms.RoomNumber, MovieName, Year FROM Movies, Showings, TheatreRooms WHERE Movies.MovieID = ' . $_POST['movieid'] . ' AND Movies.MovieID = Showings.MovieID AND Showings.RoomNumber = TheatreRooms.RoomNumber AND (Showings.ShowingID, TheatreRooms.Capacity) NOT IN (SELECT Showings.ShowingID, Capacity FROM Selection, Showings, TheatreRooms WHERE Selection.ShowingID = Showings.ShowingID AND Showings.RoomNumber = TheatreRooms.RoomNumber GROUP BY Selection.ShowingID HAVING COUNT(*) >= Capacity) ORDER BY Movies.MovieID';
            	
            	// the showings with no available seats (sold out)
            	$unavailableSQL = 'SELECT DISTINCT Showings.ShowingID, DATE_FORMAT(Date,"%W %b. %D, %Y") AS date, DATE_FORMAT(Time, "%r") AS time, TheatreRooms.RoomNumber, MovieName, Year FROM Movies, Showings, TheatreRooms WHERE Movies.MovieID = ' . $_POST['movieid'] . ' AND Movies.MovieID = Showings.MovieID AND Showings.RoomNumber = TheatreRooms.RoomNumber AND (Showings.ShowingID, TheatreRooms.Capacity) IN (SELECT Showings.ShowingID, Capacity FROM Selection, Showings, TheatreRooms WHERE Selection.ShowingID = Showings.ShowingID AND Showings.RoomNumber = TheatreRooms.RoomNumber GROUP BY Selection.ShowingID HAVING COUNT(*) >= Capacity) ORDER BY Movies.MovieID';
            	
            	$query = queryShowings($connection, $availableSQL, $unavailableSQL);
            	if ($query === False) {
                	echo '<p>There are no showings for the selected movie.</p><p><a href="ticketing.php">&larr; Return to ticketing page</a></p>';
            	}
                
            	mysqli_close($connection);
            } else {
                echo '<p>Error: You must select a movie.</p><p><a href="ticketing.php">&larr; Return to ticketing page</a></p>';
            }
        } elseif ($_POST['filter'] == "genre") {
            
            if ($_POST['genre'] <> "") {
                include 'connectdb.php';
                
                echo '<h2>' . $_POST['genre'] . ' Showings</h2>';
                
                // the showings with available seats
            	$availableSQL = 'SELECT DISTINCT Showings.ShowingID, DATE_FORMAT(Date,"%W %b. %D, %Y") AS date, DATE_FORMAT(Time, "%r") AS time, TheatreRooms.RoomNumber, MovieName, Year FROM Movies, MovieGenres, Showings, TheatreRooms WHERE MovieGenres.Genre = "' . $_POST['genre'] . '" AND Movies.MovieID = MovieGenres.MovieID AND Movies.MovieID = Showings.MovieID AND Showings.RoomNumber = TheatreRooms.RoomNumber AND (Showings.ShowingID, TheatreRooms.Capacity) NOT IN (SELECT Showings.ShowingID, Capacity FROM Selection, Showings, TheatreRooms WHERE Selection.ShowingID = Showings.ShowingID AND Showings.RoomNumber = TheatreRooms.RoomNumber GROUP BY Selection.ShowingID HAVING COUNT(*) >= Capacity) ORDER BY Movies.MovieID';
            	
            	// the showings with no available seats (sold out)
            	$unavailableSQL = 'SELECT DISTINCT Showings.ShowingID, DATE_FORMAT(Date,"%W %b. %D, %Y") AS date, DATE_FORMAT(Time, "%r") AS time, TheatreRooms.RoomNumber, MovieName, Year FROM Movies, MovieGenres, Showings, TheatreRooms WHERE MovieGenres.Genre = "' . $_POST['genre'] . '" AND Movies.MovieID = MovieGenres.MovieID AND Movies.MovieID = Showings.MovieID AND Showings.RoomNumber = TheatreRooms.RoomNumber AND (Showings.ShowingID, TheatreRooms.Capacity) IN (SELECT Showings.ShowingID, Capacity FROM Selection, Showings, TheatreRooms WHERE Selection.ShowingID = Showings.ShowingID AND Showings.RoomNumber = TheatreRooms.RoomNumber GROUP BY Selection.ShowingID HAVING COUNT(*) >= Capacity) ORDER BY Movies.MovieID';
            	
            	$query = queryShowings($connection, $availableSQL, $unavailableSQL);
            	if ($query === False) {
                	echo '<p>There are no showings for the selected genre.</p><p><a href="ticketing.php">&larr; Return to ticketing page</a></p>';
            	}
                
            	mysqli_close($connection);
            } else {
                echo '<p>Error: You must select a genre.</p><p><a href="ticketing.php">&larr; Return to ticketing page</a></p>';
            }
        } elseif ($_POST['filter'] == "theatre") {
            
            if ($_POST['theatre-rn'] <> "") {
                include 'connectdb.php';
                
                echo '<h2>Showings in Theatre ' . $_POST['theatre-rn'] . '</h2>';
                
                // the showings with available seats
            	$availableSQL = 'SELECT DISTINCT Showings.ShowingID, DATE_FORMAT(Date,"%W %b. %D, %Y") AS date, DATE_FORMAT(Time, "%r") AS time, TheatreRooms.RoomNumber, MovieName, Year FROM Movies, Showings, TheatreRooms WHERE TheatreRooms.RoomNumber = "' . $_POST['theatre-rn'] . '" AND Movies.MovieID = Showings.MovieID AND Showings.RoomNumber = TheatreRooms.RoomNumber AND (Showings.ShowingID, TheatreRooms.Capacity) NOT IN (SELECT Showings.ShowingID, Capacity FROM Selection, Showings, TheatreRooms WHERE Selection.ShowingID = Showings.ShowingID AND Showings.RoomNumber = TheatreRooms.RoomNumber GROUP BY Selection.ShowingID HAVING COUNT(*) >= Capacity) ORDER BY Movies.MovieID';
            	
            	// the showings with no available seats (sold out)
            	$unavailableSQL = 'SELECT DISTINCT Showings.ShowingID, DATE_FORMAT(Date,"%W %b. %D, %Y") AS date, DATE_FORMAT(Time, "%r") AS time, TheatreRooms.RoomNumber, MovieName, Year FROM Movies, Showings, TheatreRooms WHERE TheatreRooms.RoomNumber = "' . $_POST['theatre-rn'] . '" AND Movies.MovieID = Showings.MovieID AND Showings.RoomNumber = TheatreRooms.RoomNumber AND (Showings.ShowingID, TheatreRooms.Capacity) IN (SELECT Showings.ShowingID, Capacity FROM Selection, Showings, TheatreRooms WHERE Selection.ShowingID = Showings.ShowingID AND Showings.RoomNumber = TheatreRooms.RoomNumber GROUP BY Selection.ShowingID HAVING COUNT(*) >= Capacity) ORDER BY Movies.MovieID';
            	
            	$query = queryShowings($connection, $availableSQL, $unavailableSQL);
            	if ($query === False) {
                	echo '<p>There are no showings in the selected theatre.</p><p><a href="ticketing.php">&larr; Return to ticketing page</a></p>';
            	}
                
            	mysqli_close($connection);
            } else {
                echo '<p>Error: You must select a theatre.</p><p><a href="ticketing.php">&larr; Return to ticketing page</a></p>';
            }
        } elseif ($_POST['filter'] == "date") {
            
            if ($_POST['day-lb'] <> "" && $_POST['month-lb'] <> "" && $_POST['year-lb'] <> "" && $_POST['day-ub'] <> "" && $_POST['month-ub'] <> "" && $_POST['year-ub'] <> "" && strtotime($_POST['year-lb'] . $_POST['month-lb'] . $_POST['day-lb']) <= strtotime($_POST['year-ub'] . $_POST['month-ub'] . $_POST['day-ub'])) {
                include 'connectdb.php';
                
                echo '<h2>Showings between ' . $_POST['year-lb'] . '-' . $_POST['month-lb'] . '-' . $_POST['day-lb'] . ' and ' . $_POST['year-ub'] . '-' . $_POST['month-ub'] . '-' . $_POST['day-ub'] . '</h2>';
                
                // the showings with available seats
            	$availableSQL = 'SELECT DISTINCT Showings.ShowingID, DATE_FORMAT(Date,"%W %b. %D, %Y") AS date, DATE_FORMAT(Time, "%r") AS time, TheatreRooms.RoomNumber, MovieName, Year FROM Movies, Showings, TheatreRooms WHERE Showings.Date >= "' . $_POST['year-lb'] . '-' . $_POST['month-lb'] . '-' . $_POST['day-lb'] . '" AND Showings.Date <= "' . $_POST['year-ub'] . '-' . $_POST['month-ub'] . '-' . $_POST['day-ub'] . '" AND Movies.MovieID = Showings.MovieID AND Showings.RoomNumber = TheatreRooms.RoomNumber AND (Showings.ShowingID, TheatreRooms.Capacity) NOT IN (SELECT Showings.ShowingID, Capacity FROM Selection, Showings, TheatreRooms WHERE Selection.ShowingID = Showings.ShowingID AND Showings.RoomNumber = TheatreRooms.RoomNumber GROUP BY Selection.ShowingID HAVING COUNT(*) >= Capacity) ORDER BY Movies.MovieID';
            	
            	// the showings with no available seats (sold out)
            	$unavailableSQL = 'SELECT DISTINCT Showings.ShowingID, DATE_FORMAT(Date,"%W %b. %D, %Y") AS date, DATE_FORMAT(Time, "%r") AS time, TheatreRooms.RoomNumber, MovieName, Year FROM Movies, Showings, TheatreRooms WHERE Showings.Date >= "' . $_POST['year-lb'] . '-' . $_POST['month-lb'] . '-' . $_POST['day-lb'] . '" AND Showings.Date <= "' . $_POST['year-ub'] . '-' . $_POST['month-ub'] . '-' . $_POST['day-ub'] . '" AND Movies.MovieID = Showings.MovieID AND Showings.RoomNumber = TheatreRooms.RoomNumber AND (Showings.ShowingID, TheatreRooms.Capacity) IN (SELECT Showings.ShowingID, Capacity FROM Selection, Showings, TheatreRooms WHERE Selection.ShowingID = Showings.ShowingID AND Showings.RoomNumber = TheatreRooms.RoomNumber GROUP BY Selection.ShowingID HAVING COUNT(*) >= Capacity) ORDER BY Movies.MovieID';
            	
            	$query = queryShowings($connection, $availableSQL, $unavailableSQL);
            	if ($query === False) {
                	echo '<p>There are no showings between the selected dates.</p><p><a href="ticketing.php">&larr; Return to ticketing page</a></p>';
            	}
                
            	mysqli_close($connection);
            } else {
                echo '<p>Error: You must select both dates and the first date must be before than or equal to the second.</p><p><a href="ticketing.php">&larr; Return to ticketing page</a></p>';
            }
        }
    }
    
    function queryShowings($connection, $availableSQL, $unavailableSQL) {
        $availableResult = mysqli_query($connection, $availableSQL);
    	
    	if (mysqli_num_rows($availableResult) > 0) {
        	echo '<table><thead><tr><th>Showing ID</th><th>Date</th><th>Time</th><th>Theatre</th><th>Movie Title</th><th>Year</th><th></th></tr></thead><tbody>';
        	// output data of each row
            while ($row = mysqli_fetch_assoc($availableResult)) {
                echo '<tr><td>' . $row['ShowingID'] . '</td><td>' . $row['date'] . '</td><td>' . $row['time'] . '</td><td>' . $row['RoomNumber'] . '</td><td>' . $row['MovieName'] . '</td><td>' . $row['Year'] . '</td><td></td></tr>';
            }
            
            $unavailableResult = mysqli_query($connection, $unavailableSQL);
            if (mysqli_num_rows($unavailableResult) > 0) {
            	// output data of each row
                while ($row = mysqli_fetch_assoc($unavailableResult)) {
                    echo '<tr><td>' . $row['ShowingID'] . '</td><td>' . $row['date'] . '</td><td>' . $row['time'] . '</td><td>' . $row['RoomNumber'] . '</td><td>' . $row['MovieName'] . '</td><td>' . $row['Year'] . '</td><td>(Sold Out)</td></tr>';
                }
                echo '</tbody></table><p><a href="ticketing.php">&larr; Return to ticketing page</a></p>';
                return True;
            } else {
                echo '</tbody></table><p><a href="ticketing.php">&larr; Return to ticketing page</a></p>';
                return True;
            }
    	} else {
        	$unavailableResult = mysqli_query($connection, $unavailableSQL);
        	
        	if (mysqli_num_rows($unavailableResult) > 0) {
            	echo '<table><thead><tr><th>Showing ID</th><th>Date</th><th>Time</th><th>Theatre</th><th>Movie Title</th><th>Year</th></tr></thead><tbody>';
            	// output data of each row
                while ($row = mysqli_fetch_assoc($unavailableResult)) {
                    echo '<tr><td>' . $row['ShowingID'] . '</td><td>' . $row['date'] . '</td><td>' . $row['time'] . '</td><td>' . $row['RoomNumber'] . '</td><td>' . $row['MovieName'] . '</td><td>' . $row['Year'] . '</td><td>(Sold Out)</td></tr>';
                }
                echo '</tbody></table><p><a href="ticketing.php">&larr; Return to ticketing page</a></p>';
                return True;
            } else {
                return False;
            }
    	}
    }
?>
</body>
</html>