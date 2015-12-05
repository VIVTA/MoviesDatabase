<h2>Rate a Showing</h2>
<form action="actions/updaterating.php" method="POST">
    <select name="customerid" required="required" id="rating-customer">
    	<option value="">Select a customer...</option>
        <?php
            $result = mysqli_query($connection, 'SELECT CustomerID, FirstName, LastName FROM Customers WHERE CustomerID IN (SELECT CustomerID FROM Selection)');
            
        	if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<option value="' . $row['CustomerID'] . '">' . $row['CustomerID'] . ' - ' . $row['FirstName'] . ' ' . $row['LastName'] . '</option>';
                }
            }
        ?>
	</select>
	<select name="showingid" required="required" id="rating-showing">
    	<option value="">Select a showing...</option>
	</select>
	<div class="stars">
    	<input class="star star-5" id="star-5" type="radio" name="star" value="5">
        <label class="star star-5" for="star-5"></label>
        <input class="star star-4" id="star-4" type="radio" name="star" value="4">
        <label class="star star-4" for="star-4"></label>
        <input class="star star-3" id="star-3" type="radio" name="star" value="3">
        <label class="star star-3" for="star-3"></label>
        <input class="star star-2" id="star-2" type="radio" name="star" value="2">
        <label class="star star-2" for="star-2"></label>
        <input class="star star-1" id="star-1" type="radio" name="star" value="1">
        <label class="star star-1" for="star-1"></label>
	</div>
	<br><br>
	<input name="submit" type="submit" value="Update Rating">
</form>
<div id="bin">
    <select id="rating-showing-default">
    	<option value="">Select a showing...</option>
	</select>
    <?php
    	$result = mysqli_query($connection, 'SELECT CustomerID FROM Customers WHERE CustomerID IN (SELECT CustomerID FROM Selection)');
    	
    	if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                
                $customerShowings = mysqli_query($connection, 'SELECT Selection.ShowingID, Rating, MovieName FROM Selection, Showings, Movies WHERE Selection.ShowingID = Showings.ShowingID AND Showings.MovieID = Movies.MovieID AND CustomerID = ' . $row['CustomerID']);
                
                if (mysqli_num_rows($result) > 0) {
                    echo '<select id="' . $row['CustomerID'] . '"><option value="">Select a showing...</option>';
                    while ($showingRow = mysqli_fetch_assoc($customerShowings)) {
                        echo '<option value="' . $showingRow['ShowingID'] . '" data-rating="' . $showingRow['Rating'] . '">' . $showingRow['ShowingID'] . ' - ' . $showingRow['MovieName'] . '</option>';
                    }
                    echo '</select>';
                }
            }
        }
    ?>
</div>
<br>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
	$(function(){
    	$('#rating-customer').on('change', function(){
        	// clear the stars
        	$('input[name=star]').prop("checked", false);
        	var val = this.value ? this.value : 'rating-showing-default';
        	// grab the showings select with the same id as val from the bin and plop it into the form
        	$('#rating-showing').html($('#' + val).children().clone());
    	});
    	
    	$('#rating-showing').on('change', function(){
        	var rating = $(this).find(':selected').attr('data-rating');
        	if (rating) {
            	$('input[name=star][value=' + rating + ']').prop("checked", true);
        	} else {
            	// clear the stars
            	$('input[name=star]').prop("checked", false);
        	}
    	});
	});
</script>