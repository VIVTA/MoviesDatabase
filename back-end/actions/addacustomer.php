<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Customer</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>PSC - Staff Access : Add Customer</h1>
<?php
   include '../../connectdb.php';
?>
<ol>
<?php
   $customerFname = $_POST["cusfname"];
   $customerLname = $_POST["cuslname"];
   $customerSex = $_POST["cussex"];
   $customerEmail = $_POST["cusemail"];
   $customerID = $_POST["CustomerID"];
   $query='select max(CustomerID) as maxid from Customers';
   $result=mysqli_query($connection,$query);
   if (!$result) {
        die("database max query failed.");
        }
   $row=mysqli_fetch_assoc($result);
   $newkey = intval($row["maxid"]) + 1;
   $CustomerID = (string)$newkey;
   $query = 'insert into Customers values("' . $CustomerID . '","' . $customerFname . '","' . $customerLname . '","' . $customerSex . '","' . $customerEmail . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
        }
        echo "Customer " . $CustomerID . " was added!";

   mysqli_close($connection);
?>
</ol>
<p><a href="../staff.php">&larr; Return to staff page</a></p>
</body>


