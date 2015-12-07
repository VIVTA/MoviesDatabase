<?php
   include '../../connectdb.php';
   if (isset($_POST['thegenres'])) {
       foreach($_POST['thegenres'] as $value){
             list($movid,$movgenre) = explode('|', $value);
       }
       $query = "Select * from MovieGenres where MovieID='" . $movid . "' and Genre='" . $movgenre . "'";
       $result = mysqli_query($connection,$query);
       if (!$result) {
          die("Database query failed");
       }
       $row = mysqli_fetch_assoc($result);
       $movieid = $row["MovieID"];
       $moviegenre = $row["Genre"];
       
       $genreSelected = True;
   } else {
       echo '<p>Error: you must select at least one option.</p>';
       $genreSelected = False;
   }
   mysqli_close($connection);
?>


