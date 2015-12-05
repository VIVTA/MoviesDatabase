<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Update Movie Genre</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<h1>PSC - Staff Access : Update Movie Genre</h1>

<?php
   include 'connectdb.php';
   $newgenre = $_POST['movie-genre'];
   $oldid = $_POST['movid'];
   $oldgenre = $_POST['movgenre'];
   $query = 'Update MovieGenres set Genre="' . $newgenre . '" where MovieID="' . $oldid . '" and Genre="' . $oldgenre . '"';
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "Movie Genre updated succesfully!";
   } else {
      echo "Error when updating movie: " . mysqli_error($connection);
   }
   mysqli_close($connection);
?>
<p><a href="staff.php">&larr; Return to staff page</a></p>

