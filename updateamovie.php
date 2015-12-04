<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Update Movie</title>
</head>
<body>
<h1>PSC - Staff Access : Update Movie</h1>

<?php
   include 'connectdb.php';
   $newyear = $_POST['movyear'];
   $newtitle = $_POST['movtitle'];
   $movieid = $_POST['movid'];
   $query = 'Update Movies set MovieName="' . $newtitle . '", Year=' . $newyear . " where MovieID='" . $movieid . "';";
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "Movie " . $movieid . "  updated succesfully!";
   } else {
      echo "Error when updating movie: " . mysqli_error($connection);
   }
   mysqli_close($connection);
?>
<p><a href="staff.php">&larr; Return to staff page</a></p>

