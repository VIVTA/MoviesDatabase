<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Update Showing</title>
</head>
<body>
<h1>PSC - Staff Access : Update Showing</h1>

<?php
   include 'connectdb.php';
   $newdate = $_POST['showdate'];
   $newtime = $_POST['showtime'];
   $newmovie = $_POST['movies'];
   $newroom = $_POST['rooms'];
   $showingid = $_POST['showid'];
   $query = 'Update Showings set Date ="' . $newdate . '", Time ="' . $newtime . '", MovieID ="' . $newmovie . '", RoomNumber ="' . $newroom . '" where ShowingID="' . $showingid . '"';
   $result = mysqli_query($connection,$query);
   if (!$result) {	
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "Showing " . $showingid . " updated successfully";
   } else {
      echo "Error when updating showing: " . mysqli_error($connection);
   }
   mysqli_close($connection);
?>
<p><a href="staff.php">&larr; Return to staff page</a></p>

