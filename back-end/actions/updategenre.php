<!DOCTTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Update Movie Genre</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>PSC - Staff Access : Update Movie Genre</h1>
<hr>
<?php
    include '../inc/getwhichgenre.inc.php';
?>
<h2>Update Movie Genre <?php echo $selected_showing ?> </h2>

<form  action="updateagenre.php" method="post">

<h3>Genres</h3>
<input type="radio" name="movie-genre" required="required" value="Action"> Action
<input type="radio" name="movie-genre" value="Animated"> Animated
<input type="radio" name="movie-genre" value="Comedy"> Comedy
<input type="radio" name="movie-genre" value="Drama"> Drama
<input type="radio" name="movie-genre" value="Romance"> Romance
<input type="radio" name="movie-genre" value="SciFi"> SciFi
<input type="hidden" name="movid" value= "<?php echo( htmlspecialchars( $movieid)); ?>" />
<input type="hidden" name="movgenre" value= "<?php echo( htmlspecialchars( $moviegenre)); ?>" />
<br>
<br>
<input type="submit" value="Update this Genre"><br>
</form>
</body>
</html>