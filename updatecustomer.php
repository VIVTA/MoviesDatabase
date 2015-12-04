<!DOCTTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Update Customer</title>
</head>
<body>
<h1>PSC - Staff Access : Update Customer</h1>

<?php
    include 'getwhichcustomer.php';
?>
<h2>Update Customer <?php echo $selected_customer ?> </h2>
<form  action="updateacustomer.php" method="post">

Customer First Name: <input type="text" name="cusfname" required="required" maxlength="30" value= "<?php echo( htmlspecialchars ($customerfname)); ?>" />
<br>
<br>
Customer Last Name: <input type="text" name="cuslname" required="required" maxlength="30" value= "<?php echo( htmlspecialchars ($customerlname)); ?>" />
<br>
<br>
Customer Sex: <input type="text" name="cussex" maxlength="1" value= "<?php echo( htmlspecialchars ($customersex)); ?>" />
<br>
Customer Email: <input type="text" name="cusemail" maxlength="100" value= "<?php echo( htmlspecialchars ($customeremail)); ?>" />
<input type="hidden" name="cusid" value= "<?php echo( htmlspecialchars( $selected_customer)); ?>" />
<br>
<input type="submit" value="Update this customer"><br>
<hr>
</body>
</html>


