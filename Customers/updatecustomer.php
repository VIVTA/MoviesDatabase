<!DOCTTYPE html>
<html>
<head>
</head>
<body>
<?php
    include 'getwhichcustomer.php';
?>
<h2>Update Customer <?php echo $selected_customer ?> </h2>
<form  action="updateacustomer.php" method="post">

Customer First Name: <input type="text" name="cusfname" value= "<?php echo( htmlspecialchars ($customerfname)); ?>" />
<br>
<br>
Customer Last Name: <input type="text" name="cuslname" value= "<?php echo( htmlspecialchars ($customerlname)); ?>" />
<br>
<br>
Customer Sex: <input type="text" name="cussex" value= "<?php echo( htmlspecialchars ($customersex)); ?>" />
<br>
Customer Email: <input type="text" name="cusemail" value= "<?php echo( htmlspecialchars ($customeremail)); ?>" />
<input type="hidden" name="cusid" value= "<?php echo( htmlspecialchars( $selected_customer)); ?>" />
<br>
<input type="submit" value="Update this movie"><br>
<hr>
</body>
</html>


