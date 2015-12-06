<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Update Customer</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>PSC - Staff Access : Update Customer</h1>
<hr>
<?php
   include '../../connectdb.php';
   $newfname = $_POST['cusfname'];
   $newlname = $_POST['cuslname'];
   $newsex = $_POST['cussex'];
   $newemail = $_POST['cusemail'];
   $customerid = $_POST['cusid'];
   $query = 'Update Customers set FirstName ="' . $newfname . '", LastName ="' . $newlname . '", Sex ="' . $newsex . '", Email ="' . $newemail . '" where CustomerID="' . $customerid . '"';
   $result = mysqli_query($connection,$query);
   if (!$result) {
      die("Database query failed");
   }
   if (mysqli_query($connection, $query)) {
      echo "Customer " . $customerid . " updated successfully";
   } else {
      echo "Error when updating customer: " . mysqli_error($connection);
   }
   mysqli_close($connection);
?>

<p><a href="../staff.php">&larr; Return to staff page</a></p>