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
    <li><a href="#tabs-2">Showings</a></li>
    <li><a href="#tabs-3">Theatre Rooms</a></li>
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

    <h2>Delete Movies</h2>
    <form action="choosemovies.php" method="POST">
    <input type="hidden" name="method" value="Delete">
    <input type="submit" value="Choose Movies to Delete">
    </form>
    
    <h2>Add Movies</h2>
    <form action="addmovies.php" method="POST">
        <table>
            <thead align="left">
                <th><label>Title*</label><br></th>
                <th><label>Year</label><br></th>
                <th><label>Genre(s)</label><br></th>
            </thead>
            <tbody id="add-movies">
                            <tr>
                    <td><input type="text" placeholder="Title" name="movie_title[]" required="required" maxlength="50"></td>
                    <td><input type="text" placeholder="Year" name="movie_year[]" size="4" maxlength="4"></td>
                    <td>
                        <table>
                            <tr>
                                <td><input type="checkbox" name="movie-genre[]" value="Action"> Action</td>
                                <td><input type="checkbox" name="movie-genre[]" value="Animated"> Animated</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="movie-genre[]" value="Comedy"> Comedy</td>
                                <td><input type="checkbox" name="movie-genre[]" value="Drama"> Drama</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="movie-genre[]" value="Romance"> Romance</td>
                                <td><input type="checkbox" name="movie-genre[]" value="SciFi"> SciFi</td>
                            </tr>
                        </table>
                    </td>
                    <td><input type="button" value="-" class="round-button" disabled="disabled"> <input type="button" value="+" class="round-button"></td>
                </tr>
            </tbody>
        </table>
        <p class="caption">* Required</p>
        <input type="submit" value="Add Movies">
    </form>
    <br>
    <h2>Update Movies</h2>
    <form action="choosemovies.php" method="POST">
        <input type="hidden" name="method" value="Update">
        <input type="submit" value="Choose Movies to Update">
    </form>
  
  </div>
  <div id="tabs-2">
  </div>
  <div id="tabs-3">
  </div>
</div>

</body>
</html>

