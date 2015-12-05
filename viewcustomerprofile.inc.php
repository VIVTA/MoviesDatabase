<h2>View Customer Profile</h2>
<form action="customerprofile.php" method="POST">
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
	<input type="submit" value="View Profile" name="submit">
</form>
<br>