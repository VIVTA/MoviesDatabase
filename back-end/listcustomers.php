<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : List Customers</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>PSC - Staff Access : List Customers</h1>
<hr>

<?php
    include '../connectdb.php'
?>

<?php
$query = "select * from Customers";
$result = mysqli_query($connection,$query);
if (!$result) {
        die("databases query failed.");
}
echo "<table><thead><tr><th>CustomerID</th><th>FirstName</th><th>LastName</th><th>Sex</th><th>Email</th></tr></thead><tbody>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["CustomerID"]."</td><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Sex"]."</td><td>".$row["Email"]."</td><tr>";
}
echo "</tbody></table>";
mysqli_free_result($result);
mysqli_close($connection);
?>

<p><a href="staff.php">&larr; Return to staff page</a></p>

</body>
</html>
