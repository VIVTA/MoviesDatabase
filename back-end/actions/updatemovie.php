<!DOCTTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Update Movie</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>PSC - Staff Access : Update Movie</h1>
<hr>
<?php
    include '../inc/getwhichmovie.inc.php';
?>

<h2>Update Movie <?php echo $selected_movie ?> </h2>

<form  action="updateamovie.php" method="post">
Movie Title: <input type="text" name="movtitle" required="required" maxlength="50" value="<?php echo( htmlspecialchars( $movietitle)); ?>" /> 
<br>
Movie Year:  <input type="number" name="movyear" size="4" maxlength="4" value="<?php echo( htmlspecialchars( $movieyear)); ?>" />

<input type="hidden" name="movid" value= "<?php echo( htmlspecialchars( $selected_movie)); ?>" />

<br>
<input type="submit" value="Update this movie"><br>
</form>
</body>
</html>
