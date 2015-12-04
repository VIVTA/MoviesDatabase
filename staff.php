<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PSC-Staff</title>
  <style>
        .round-button {
            background-color: white;
            border-radius: 50%;
            border: 1px solid #D8D8D8;
            box-shadow: 0px 1px 1px 0px #eee;
            width: 2em;
            height: 2em;
        }
        
        .round-button:active {
            background: linear-gradient(to bottom, #78B1F9 0%, #3979FE 100%);
            border-color: #eee;
        }
        
        .round-button[disabled="disabled"] {
            opacity: 0.5;
        }
        
        .round-button[disabled="disabled"]:active {
            background: white;
            border-color: #D8D8D8;
        }
        
        .caption {
            font-size: 0.9em;
            color: red;
            margin: 0.5em 0;
        }
        
        tr {
            vertical-align: top;
        }
  </style>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body>

<h1>PSC - Staff Access</h1>
 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Movies</a></li>
    <li><a href="#tabs-2">Movie Genres</a></li> 
    <li><a href="#tabs-3">Theatre Rooms</a></li>
    <li><a href="#tabs-4">Showings</a></li>
    <li><a href="#tabs-5">Customers</a></li>
  </ul>
  <div id="tabs-1">
    <h2>List Movies</h2>
    <form action="listmovies.php" method="POST">
      By <select name="order-by">
        <option value="year">Year</option>
        <option value="alphabetically">Name (alphabetically)</option>
      </select>
      <input type="submit" value="Submit">
    </form>
    <br>
    <h2>Add Movies</h2>
    <form action="addmoviesform.php" method="POST">
    <input type="submit" value="Add A New Movie">
    </form>
    <br>
    <h2>Delete Movies</h2>
    <form action="choosemovies.php" method="POST">
    <input type="hidden" name="method" value="Delete">
    <input type="submit" value="Choose Movie to Delete">
    </form>
    <br>
    <h2>Update Movies</h2>
    <form action="choosemovies.php" method="POST">
        <input type="hidden" name="method" value="Update">
        <input type="submit" value="Choose Movie to Update">
    </form>
  </div>
  <div id="tabs-2">
    <h2>List Movie Genres</h2>
    <form action="listgenres.php" method="POST">
    <input type="submit" value="List Movie Genres">
    </form>
    <br>
    <h2>Add Movie Genres</h2>
    <form action="addgenresform.php" method="POST">
    <input type="submit" value="Add A Movie Genre">
    </form>
    <br>
    <h2>Delete Movie Genres</h2>
    <form action="choosegenres.php" method="POST">
    <input type="hidden" name="method" value="Delete">
    <input type="submit" value="Choose Movie Genre to Delete">
    </form>
  </div>
  <div id="tabs-3">
  <h2>List Rooms</h2>
    <form action="listrooms.php" method="POST">
    <input type="submit" value="List Theatre Rooms">
    </form>
  <br>
  <h2>Add Rooms</h2>
    <form action="addroomsform.php" method="POST">
    <input type="submit" value="Add A Theatre Room">
    </form>
  <br> 
  <h2>Delete Rooms</h2>
    <form action="chooserooms.php" method="POST">
    <input type="hidden" name="method" value="Delete">
    <input type="submit" value="Choose A Room to Delete">
    </form>
  <br>
  <h2>Update Rooms</h2>
    <form action="chooserooms.php" method="POST">
    <input type="hidden" name="method" value="Update">
    <input type="submit" value="Choose A Room to Update">
    </form>
</div>
  <div id="tabs-4">
  <h2>List Showings</h2>
    <form action="listshowings.php" method="POST">
    <input type="submit" value="List Showings">
    </form>
  <br>
  <h2>Add Showings</h2>
    <form action="addshowingsform.php" method="POST">
    <input type="submit" value="Add A Showing">
    </form>
  <br>
  <h2>Delete Showings</h2>
    <form action="chooseshowings.php" method="POST">
    <input type="hidden" name="method" value="Delete">
    <input type="submit" value="Choose A Showing To Delete">
    </form>
  <br>
  <h2>Update Showings</h2>
    <form action="chooseshowings.php" method="POST">
    <input type="hidden" name="method" value="Update">
    <input type="submit" value="Choose A Showing to Update">
    </form>
  </div>
  <div id="tabs-5">
  <h2>List Customers</h2>
    <form action="listcustomers.php" method="POST">
    <input type="submit" value="List Customers">
    </form>
  <br>
  <h2>Add Customers</h2>
    <form action="addcustomersform.php" method="POST">
    <input type="submit" value="Add A Customer">
    </form>
  <br>
  <h2>Delete Customers</h2>
    <form action="choosecustomers.php" method="POST">
    <input type="hidden" name="method" value="Delete">
    <input type="submit" value="Choose A Customer to Delete">
    </form>
  <br>
  <h2>Update Customers</h2>
    <form action="choosecustomers.php" method="POST">
    <input type="hidden" name="method" value="Update">
    <input type="submit" value="Choose A Customer to Update">
    </form>
  </div>
</div>

</body>
</html>

