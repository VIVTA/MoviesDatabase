<!DOCTTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Showing</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<h1>PSC - Staff Access : Add Showing</h1>

<form  action="addashowing.php" method="post">

Showing Date: <input type="date" name="showdate" value= "" />
<br>
<br>
Showing Time: <input type="time" name="showtime" value= "" />
<br>
<br>
Showing Movie: <br>
<?php include 'getmovies.php' ?>
<br>
Showing Room: <?php include 'getrooms.php' ?>
<br>
<input type="submit" value="Add this Showing"><br>
<hr>
</body>
</html>
