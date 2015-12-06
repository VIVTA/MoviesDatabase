<h2>List Viewed Movies</h2>
<form action="actions/customermovies.php" method="POST">
    <select name="customerid" required="required">
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
	<br><br>
	<input type="submit" value="List Movies Viewed by Customer" name="submit">
</form>
<br>