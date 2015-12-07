<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Showing</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>PSC - Staff Access : Add Showing</h1>
<hr>
<form  action="actions/addashowing.php" method="post">

Showing Date: <input type="date" name="showdate" value= "" />
<br>
<br>
Showing Time: <input type="time" name="showtime" value= "" />
<br>
<br>
Showing Movie: <br>
<?php 
    $level = 1;
    include 'inc/getmovies.inc.php';
?>
<br>
Showing Room: <?php include 'inc/getrooms.inc.php' ?>
<br>
<input type="submit" value="Add this Showing"><br>
</form>
</body>
</html>
