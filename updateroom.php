<!DOCTTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Update Room</title>
</head>
<body>
<h1>PSC - Staff Access : Update Room</h1>

<?php
    include 'getwhichroom.php';
?>
<h2>Update Theatre Room <?php echo $selected_room ?> </h2>

<form  action="updatearoom.php" method="post">
<br>
<h2>Update Room Number <?php echo $selected_room ?> </h2>
Room Capacity: <input type="number" name="roomcap" value="<?php echo ( htmlspecialchars( $roomcapacity)); ?>" />
<br>
<input type="hidden" name="roomnum" value="<?php echo ( htmlspecialchars( $selected_room)); ?>" />
<input type="submit" value="Update this room">
<br>
<hr>
</body>
</html>
