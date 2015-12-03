<!DOCTTYPE html>
<html>
<head>
</head>
<body>
<?php
    include 'getwhichroom.php';
?>

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
