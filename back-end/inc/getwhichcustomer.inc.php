<?php
    if (isset($_POST['thecustomers'])) {
        
       include '../../connectdb.php';
       
       foreach($_POST['thecustomers'] as $checkbox){
            $selected_customer = $checkbox;
       }
       $query = "Select * from Customers where CustomerID='" . $selected_customer . "';";
       $result = mysqli_query($connection,$query);
       if (!$result) {
          die("Database query failed");
       }
       $row = mysqli_fetch_assoc($result);
       $customerfname = $row["FirstName"];
       $customerlname = $row["LastName"];
       $customersex = $row["Sex"];
       $customeremail = $row["Email"];
       mysqli_close($connection);
       
       $selectedCustomer = True;
   } else {
       echo '<p>Error: you must select a customer.</p>';
       $selectedCustomer = False;
   }
?>

