<?php
   include 'connectdb.php';
   $newfname = $_POST['cusfname'];
   $newlname = $_POST['cuslname'];
   $newsex = $_POST['cussex'];
   $newemail = $_POST['cusemail'];
   $customerid = $_POST['cusid'];
   $query = 'Update Customers set FirstName ="' . $newfname . '", LastName ="' . $newlname . '", Sex ="' . $newsex . '", Email ="' . $newemail . '" where CustomerID="' . $customerid . '"';
   echo $query;
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "Customer updated successfully";
   } else {
      echo "Error when updating customer: " . mysqli_error($connection);
   }
   mysqli_close($connection);
?>

