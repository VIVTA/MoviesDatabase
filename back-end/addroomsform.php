<!DOCTTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Rooms</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>PSC - Staff Access : Add Rooms</h1>
<hr>
<form  action="actions/addaroom.php" method="post">
<br>
Room Capacity: <input type="number" name="newroomcap" value="<?php echo ( htmlspecialchars( $roomcapacity)); ?>" />
<br>
<input type="submit" value="Add this room">
<br>
</form>
</body>
</html>
