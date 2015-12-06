<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Delete Customers</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>PSC - Staff Access : Delete Customers</h1>
<hr>
<?php
    include '../../connectdb.php';

    function IsChecked($chkname,$connection)  {
        if (!empty($_POST[$chkname]))  {
            foreach($_POST[$chkname] as $value) {
                $delsql="delete from Customers where CustomerID='" . $value . "'";
                deleteCustomer($delsql,$connection,$value);
            }
        }
    }

    function deleteCustomer($deleteCommand,$conn,$val) {
        if (mysqli_query($conn,$deleteCommand)) {
            echo "<p>Customer " . $val . " deleted successfully</p>";
        } else {
            echo "<p>Problem with deleting customer: " . mysqli_error($conn) . "</p>";
        }
    }
    IsChecked('thecustomers',$connection);
    mysqli_close($connection);
?>
</body>
<p><a href="../staff.php">&larr; Return to staff page</a></p>
</html>

