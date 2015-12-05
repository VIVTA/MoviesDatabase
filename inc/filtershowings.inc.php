<h2>List Showings</h2>
<table>
    <form action="actions/listshowings.php" method="POST">
        <tr>
            <td>
                <select name="genre">
                    <option value="">Select a genre...</option>
                    <option value="Action">Action</option>
                    <option value="Animated">Animated</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Drama">Drama</option>
                    <option value="Romance">Romance</option>
                    <option value="SciFi">SciFi</option>
                </select>
            </td>
            <td>
                <input type="hidden" value="genre" name="filter">
                <input type="submit" name="submit" value="List Showings by Genre">
            </td>
        </tr>
    </form>
    <form action="actions/listshowings.php" method="POST">
        <tr>
            <td>
                List showings between <select name="day-lb">
                    <option value="">dd</option>
                    <?php
                        $d = 1;
                    	while ($d < 32) {
                        	if ( strlen(strval($d)) == 1 ) {
                            	echo '<option value="0' . $d . '">0' . $d . '</option>';
                        	} else {
                            	echo '<option value="' . $d . '">' . $d . '</option>';
                        	}
                        	$d = $d + 1;
                    	}
                    ?>
                </select>
                <select name="month-lb">
                    <option value="">mm</option>
                    <?php
                    	$m = 1;
                    	while ($m < 13) {
                        	if ( strlen(strval($m)) == 1 ) {
                            	echo '<option value="0' . $m . '">0' . $m . '</option>';
                        	} else {
                            	echo '<option value="' . $m . '">' . $m . '</option>';
                        	}
                        	$m = $m + 1;
                    	}
                    ?>
                </select>
                <select name="year-lb">
                    <option value="">yyyy</option>
                    <?php
                    	$y = date('Y');
                    	$ly = $y + 5;
                    	while ($y < $ly) {
                        	echo '<option value="' . $y . '">' . $y . '</option>';
                        	$y = $y + 1;
                    	}
                    ?>
                </select>
                and <select name="day-ub">
                    <option value="">dd</option>
                    <?php
                        $d = 1;
                    	while ($d < 32) {
                        	if ( strlen(strval($d)) == 1 ) {
                            	echo '<option value="0' . $d . '">0' . $d . '</option>';
                        	} else {
                            	echo '<option value="' . $d . '">' . $d . '</option>';
                        	}
                        	$d = $d + 1;
                    	}
                    ?>
                </select>
                <select name="month-ub">
                    <option value="">mm</option>
                    <?php
                    	$m = 1;
                    	while ($m < 13) {
                        	if ( strlen(strval($m)) == 1 ) {
                            	echo '<option value="0' . $m . '">0' . $m . '</option>';
                        	} else {
                            	echo '<option value="' . $m . '">' . $m . '</option>';
                        	}
                        	$m = $m + 1;
                    	}
                    ?>
                </select>
                <select name="year-ub">
                    <option value="">yyyy</option>
                    <?php
                    	$y = date('Y');
                    	$ly = $y + 5;
                    	while ($y < $ly) {
                        	echo '<option value="' . $y . '">' . $y . '</option>';
                        	$y = $y + 1;
                    	}
                    ?>
                </select>
            </td>
            <td>
                <input type="hidden" value="date" name="filter">
                <input type="submit" name="submit" value="List Showings by Date">
            </td>
        </tr>
    </form>
    <form action="actions/listshowings.php" method="POST">
        <tr>
            <td>
                <select name="theatre-rn">
                    <option value="">Select a theatre...</option>
                    <?php
                    	$result = mysqli_query($connection, 'SELECT RoomNumber FROM TheatreRooms');
                    	
                    	if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['RoomNumber'] . '">Theatre ' . $row['RoomNumber'] . '</option>';
                            }
                        }
                    ?>
                </select>
            </td>
            <td>
                <input type="hidden" value="theatre" name="filter">
                <input type="submit" name="submit" value="List Showings by Theatre"
            </td>
        </tr>
    </form>
    <form action="actions/listshowings.php" method="POST">
        <tr>
            <td>
                <select name="movieid">
                    <option value="">Select a movie...</option>
                    <?php
                    	$result = mysqli_query($connection, 'SELECT Movies.MovieID, MovieName FROM Movies ORDER BY Movies.MovieID');
                    	
                    	if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['MovieID'] . '">' . $row['MovieName'] . '</option>';
                            }
                        }
                    ?>
                </select>
            </td>
            <td>
                <input type="hidden" value="movie" name="filter">
                <input type="submit" name="submit" value="List Showings by Movie"
            </td>
        </tr>
    </form>
</table>
<br>