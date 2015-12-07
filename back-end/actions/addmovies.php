<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Movies</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>PSC - Staff Access : Add Movies</h1>
<?php
   include '../inc/uploadfile.inc.php';
   include '../../connectdb.php';
?>
<?php
   $movieName = $_POST["movie_title"];
   $movieYear = $_POST["movie_year"];
   $movieID = $_POST["MovieID"];
   $movieGenres = $_POST["movie_genre"];
   $query1='select max(movieID) as maxid from Movies';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
        die("database max query failed.");
   	}
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
   $movieID = (string)$newkey;
   $query = 'insert into Movies values("' . $movieID . '","' . $movieName . '","' . $movieYear . '","' . $posterpic . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
   	}
        echo "<p>Movie " . $movieID . "  was added!</p>";
   for ($i=0; $i<=count($movieGenres)-1;$i++){;
      $query2 = 'insert into MovieGenres values("' . $movieID . '","' . $movieGenres[$i] . '")';
      if (!mysqli_query($connection, $query2)) {
        die("Error: insert failed" . mysqli_error($connection));
        }
        echo "<p>Genre (" . $movieGenres[$i] . ") for movie " . $movieID . "  was added!</p>";
      }

   mysqli_close($connection);
?>
<p><a href="../staff.php">&larr; Return to staff page</a></p>
</body>
</html>
