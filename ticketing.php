<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>PSC - Ticket Desk</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <?php
        include 'connectdb.php';
    ?>
    <h1>PSC - Ticket Desk</h1>
    <hr>
    <?php
    	include 'purchaseticket.inc.php';
    	include 'rateshowing.inc.php';
    	mysqli_close($connection);
    ?>
</div>
</body>
</html>