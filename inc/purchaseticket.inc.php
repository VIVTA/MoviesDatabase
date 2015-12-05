<h2>Purchase a Ticket</h2>
<form action="actions/sellticket.php" method="POST">
	Sell <select name="customerid" required="required">
    	<option value="">Select a customer...</option>
        <?php
            $result = mysqli_query($connection, 'SELECT CustomerID, FirstName, LastName FROM Customers');
            
        	if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['CustomerID'] . '">' . $row['CustomerID'] . ' - ' . $row['FirstName'] . ' ' . $row['LastName'] . '</option>';
                }
            }
        ?>
	</select>
	a ticket to <select name="showingid" required="required">
    	<option value="">Select a showing...</option>
    	<?php
        	// get the showings that aren't sold out
            $result = mysqli_query($connection, 'SELECT Showings.ShowingID, MovieName, DATE_FORMAT(Date,"%W %b. %D, %Y") AS date, DATE_FORMAT(Time, "%r") AS time FROM Showings, Movies, TheatreRooms WHERE Showings.MovieID = Movies.MovieID AND Showings.RoomNumber = TheatreRooms.RoomNumber AND (Showings.ShowingID, TheatreRooms.Capacity) NOT IN (SELECT Showings.ShowingID, Capacity FROM Selection,Showings, TheatreRooms WHERE Selection.ShowingID = Showings.ShowingID AND Showings.RoomNumber = TheatreRooms.RoomNumber GROUP BY Selection.ShowingID HAVING COUNT(*) >= Capacity) ORDER BY MovieName');
        	
        	if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['ShowingID'] . '">' . $row['ShowingID'] . ' - ' . $row['MovieName'] . ' on ' . $row['date'] . ' at ' . $row['time'] . '</option>';
                }
            }
        ?>
	</select>
	for $<input type="text" name="price" placeholder="10.00" size="6" required="required">
	<br><br>
	<input name="submit" type="submit" value="Sell Ticket">
</form>
<br>