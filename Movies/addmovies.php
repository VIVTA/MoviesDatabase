<!DOCTYPE html>
<html>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are your movies:</h1>
<ol>
<?php
   $movieName = $_POST["movie_title"];
   $movieYear = $_POST["movie_year"];
   echo count($movieName); 
   for($i=0; $i<=count($movieName)-1; $i++){
   	$movieID = $_POST["MovieID"];
   	$query1='select max(movieID) as maxid from Movies';
   	$result=mysqli_query($connection,$query1);
  	 if (!$result) {
          	die("database max query failed.");
   	}
   	$row=mysqli_fetch_assoc($result);
   	$newkey = intval($row["maxid"]) + 1;
   	$movieID = (string)$newkey;
   	$query = 'insert into Movies values("' . $movieID . '","' . $movieName[$i] . '","' . $movieYear[$i] . '")';
   	if (!mysqli_query($connection, $query)) {
        	die("Error: insert failed" . mysqli_error($connection));
   	}
   	echo "Your movie was added!";
   }

   for($i=0; $i<count($movieName)-1; $i++){
        $movieID = $_POST["MovieID"];
        $query1='select max(movieID) as maxid from Movies';
        $result=mysqli_query($connection,$query1);
         if (!$result) {
                die("database max query failed.");
        }
        $row=mysqli_fetch_assoc($result);
        $newkey = intval($row["maxid"]) + 1;
        $movieID = (string)$newkey;
        $query = 'insert into Movies values("' . $movieID . '","' . $movieName[$i] . '","' . $movieYear[$i] . '")';
        if (!mysqli_query($connection, $query)) {
                die("Error: insert failed" . mysqli_error($connection));
        }
        echo "Your movie was added!";
   }

   mysqli_close($connection);
?>
</ol>
</body>
</html>
