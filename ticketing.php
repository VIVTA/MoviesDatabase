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
    	include 'inc/purchaseticket.inc.php';
    	include 'inc/rateshowing.inc.php';
    	include 'inc/filtershowings.inc.php';
    	include 'inc/listviewedmovies.inc.php';
    	include 'inc/viewcustomerprofile.inc.php';
    	include 'inc/ticketsales.inc.php';
    	include 'inc/moviespergenre.inc.php';
    	include 'inc/topmovies.inc.php';
    	mysqli_close($connection);
    ?>
</div>
</body>
</html>