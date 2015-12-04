<!DOCTTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Rooms</title>
</head>
<body>
<h1>PSC - Staff Access : Add Rooms</h1>
<form  action="addaroom.php" method="post">
<br>
Room Capacity: <input type="number" name="newroomcap" value="<?php echo ( htmlspecialchars( $roomcapacity)); ?>" />
<br>
<input type="submit" value="Add this room">
<br>
<hr>
</body>
</html>
