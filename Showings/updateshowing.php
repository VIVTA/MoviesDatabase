<!DOCTTYPE html>
<html>
<head>
</head>
<body>
<?php
    include 'getwhichshowing.php';
?>

<form  action="updateashowing.php" method="post">

Showing Date: <input type="date" name="showdate" value= "<?php echo( htmlspecialchars ($showingdate)); ?>" />
<br>
<br>
Showing Time: <input type="time" name="showtime" value= "<?php echo( htmlspecialchars ($showingtime)); ?>" />
<br>
<br>
Showing Movie: <?php include 'getmovies.php' ?>
<br>
Showing Room: <?php include 'getrooms.php' ?>
<input type="hidden" name="cusid" value= "<?php echo( htmlspecialchars( $selected_customer)); ?>" />
<br>
<input type="submit" value="Update this Customer"><br>
<hr>
</body>
</html>
