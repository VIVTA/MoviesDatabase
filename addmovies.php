<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Movies</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<h1>PSC - Staff Access : Add Movies</h1>
<?php
   include 'uploadfile.php';
   include 'connectdb.php';
?>
<ol>
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
        echo "Movie " . $movieID . "  was added!";
   for ($i=0; $i<=count($movieGenres)-1;$i++){;
      $query2 = 'insert into MovieGenres values("' . $movieID . '","' . $movieGenres[$i] . '")';
      if (!mysqli_query($connection, $query2)) {
        die("Error: insert failed" . mysqli_error($connection));
        }
        echo "Genres for movie " . $movieID . "  was added!";
      }

   mysqli_close($connection);
?>
</ol>
<p><a href="staff.php">&larr; Return to staff page</a></p>
</body>
</html>
