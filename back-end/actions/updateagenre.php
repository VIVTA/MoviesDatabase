<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Update Movie Genre</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>PSC - Staff Access : Update Movie Genre</h1>
<hr>
<?php
   include '../../connectdb.php';
   $newgenre = $_POST['movie-genre'];
   $oldid = $_POST['movid'];
   $oldgenre = $_POST['movgenre'];
   $query = 'Update MovieGenres set Genre="' . $newgenre . '" where MovieID="' . $oldid . '" and Genre="' . $oldgenre . '"';
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "<p>Movie Genre updated succesfully!</p>";
   } else {
      echo "<p>Error when updating movie: " . mysqli_error($connection) . "</p>";
   }
   mysqli_close($connection);
?>
<p><a href="../staff.php">&larr; Return to staff page</a></p>