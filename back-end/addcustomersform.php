<!DOCTTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Customer</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>PSC - Staff Access : Add Customer</h1>
<hr>
<form  action="actions/addacustomer.php" method="post">
Customer First Name: <input type="text" name="cusfname" required="required" maxlength="30" value=""  />
<br>
Customer Last Name: <input type="text" name="cuslname" required="required" maxlength="30" value="" />
<br>
Customer Sex: <input type="text" name="cussex" maxlength="1" value="" />
<br>
Customer Email: <input type="text" name="cusemail" maxlength="100" value="" />
<br>
<input type="submit" value="Add this customer"><br>
</form>
</body>
</html>
