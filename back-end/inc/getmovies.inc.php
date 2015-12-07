<?php
    if ($level == 1) {
        include '../connectdb.php';
    } else {
        include '../../connectdb.php';
    }

    $query = "select * from Movies";
    $result = mysqli_query($connection,$query);
    if (!$result) {
        die("databases query failed.");
    }
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<input type="radio" name="movies" required="required" value="';
            echo $row["MovieID"];
            echo '">' . $row["MovieName"]. "<br>";
        }
        $moviesReturned = True;
    } else {
        echo '<p>There are no movies</p>';
        $moviesReturned = False;
    }
    mysqli_free_result($result);
?>
