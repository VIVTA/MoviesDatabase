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
   include '../../connectdb.php';
   $newyear = $_POST['movyear'];
   $newtitle = $_POST['movtitle'];
   $movieid = $_POST['movid'];
   $query = 'Update Movies set MovieName="' . $newtitle . '", Year=' . $newyear . " where MovieID='" . $movieid . "';";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "<p>Movie " . $movieid . "  updated succesfully!</p>";
   } else {
      echo "<p>Error when updating movie: " . mysqli_error($connection) . "</p>";
   }
   mysqli_close($connection);
?>
<p><a href="../staff.php">&larr; Return to staff page</a></p>

</body>
</html>