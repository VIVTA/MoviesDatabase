<!DOCTYPE html>
<html lang="en-US">
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
    
    if ($genreSelected) :
?>
    <h2>Update Movie Genre</h2>
    
    <form  action="updateagenre.php" method="post">
    
    <h3>Genres</h3>
    <input type="radio" name="movie-genre" required="required" value="Action" <?php echo wasSelected('Action', $moviegenre); ?>> Action
    <input type="radio" name="movie-genre" value="Animated" <?php echo wasSelected('Animated', $moviegenre); ?>> Animated
    <input type="radio" name="movie-genre" value="Comedy" <?php echo wasSelected('Comedy', $moviegenre); ?>> Comedy
    <input type="radio" name="movie-genre" value="Drama" <?php echo wasSelected('Drama', $moviegenre); ?>> Drama
    <input type="radio" name="movie-genre" value="Romance" <?php echo wasSelected('Romance', $moviegenre); ?>> Romance
    <input type="radio" name="movie-genre" value="SciFi" <?php echo wasSelected('SciFi', $moviegenre); ?>> SciFi
    <input type="hidden" name="movid" value= "<?php echo( htmlspecialchars( $movieid)); ?>" />
    <input type="hidden" name="movgenre" value= "<?php echo( htmlspecialchars( $moviegenre)); ?>" />
    <br>
    <br>
    <input type="submit" value="Update this Genre"><br>
    </form>
<?php
	endif;
	
	function wasSelected($genre, $selectedGenre) {
    	if ($genre == $selectedGenre) {
        	return 'checked';
    	} else {
        	return '';
    	}
	}
?>
</body>
</html>