<!DOCTTYPE html>
<html>
<head>
</head>
<body>
<?php
    include 'getwhichmovie.php';
?>

<form  action="updateamovie.php" method="post">
Movie Title: <input type="text" name="movtitle" value="<?php echo( htmlspecialchars( $movietitle)); ?>" />
<br>
Movie Year:  <input type="number" name="movyear" min="1910" max="2030" step="1" value="<?php echo( htmlspecialchars( $movieyear)); ?>" />

<input type="hidden" name="movid" value= "<?php echo( htmlspecialchars( $selected_movie)); ?>" />

<br>
<input type="submit" value="Update this movie"><br>
<hr>
</body>
</html>

)
