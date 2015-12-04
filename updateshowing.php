<!DOCTTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Update Showing</title>
</head>
<body>
<h1>PSC - Staff Access : Update Showing</h1>
<?php
    include 'getwhichshowing.php';
?>
<h2>Update Showing <?php echo $selected_showing ?> </h2>

<form  action="updateashowing.php" method="post">

Showing Date: <input type="date" name="showdate" value= "<?php echo( htmlspecialchars ($showingdate)); ?>" />
<br>
<br>
Showing Time: <input type="time" name="showtime" value= "<?php echo( htmlspecialchars ($showingtime)); ?>" />
<br>
<br>
Showing Movie: <br>
<?php include 'getmovies.php' ?>
<br>
Showing Room: <?php include 'getrooms.php' ?>
<input type="hidden" name="showid" value= "<?php echo( htmlspecialchars( $selected_showing)); ?>" />
<br>
<input type="submit" value="Update this Showing"><br>
<hr>
</body>
</html>
