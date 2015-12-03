<?php
    include 'connectdb.php'
?>

<?php
$query = "select * from Customers";
$result = mysqli_query($connection,$query);
if (!$result) {
        die("databases query failed.");
}
echo "<table><tr><th>CustomerID</th><th>FirstName</th><th>LastName</th><th>Sex</th><th>Email</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["CustomerID"]."</td><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Sex"]."</td><td>".$row["Email"]."</td><tr>";
}
echo "</table>";
mysqli_free_result($result);
?>


