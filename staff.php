<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff</title>
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
    </style>
</head>
<body>
<h1>PSC - Staff Access</h1>
<hr>
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
<!-- deletemovies.php will display a table of movies with a checkbox column added on the left. The user checks off movies to delete and then clicks the Delete Selected Movies button. -->
<form action="deletemovies.php" method="GET">
    <input type="submit" value="Choose Movies to Delete">
</form>
<br>
<h2>Add Movies</h2>
<form action="addmovies.php" method="POST">
    <table>
        <thead align="left">
            <th><label>Movie ID*</label><br></th>
            <th><label>Title*</label><br></th>
            <th><label>Year</label><br></th>
        </thead>
        <tbody id="add-movies">
            <!-- Pressing the plus button adds a new set of inputs for another record. The name[] notation will create an array that can be iterated through in PHP to add any number of movies at once. The condition NOT NULL is checked here with the required attribute, but will also be checked with PHP before the SQL is sent to the server. -->
            <tr>
                <td><input type="text" placeholder="Movie ID" name="movie-id[]" required="required" maxlength="3"></td>
                <td><input type="text" placeholder="Title" name="movie-title[]" required="required"></td>
                <td><input type="text" placeholder="Year" name="movie-year[]" size="4" maxlength="4"></td>
                <td><input type="button" value="-" class="round-button" disabled="disabled"> <input type="button" value="+" class="round-button"></td>
            </tr>
        </tbody>
    </table>
    <p>* Required</p>
    <input type="submit" value="Add Movies">
</form>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
    $(document).ready(function(){
        $('#add-movies').on('click', '.round-button', function(){
            var val = this.value;
            if (val == "+") {
                $(this).parents('tbody').append('<tr><td><input type="text" placeholder="Movie ID" name="movie-id[]" id="movie-id" required="required" maxlength="3"></td><td><input type="text" placeholder="Title" name="movie-title[]" id="movie-title" required="required"></td><td><input type="text" placeholder="Year" name="movie-year[]" id="movie-year" size="4" maxlength="4"></td><td><input type="button" value="-" class="round-button"> <input type="button" value="+" class="round-button"></td></tr>').find('.round-button[disabled=disabled]').removeAttr('disabled');
            } else {
                if ( $(this).parents('tbody').find('tr').length == 2 ) {
                    $(this).parents('tbody').find('.round-button[value=-]').attr('disabled', 'disabled');
                }
                $(this).parents('tr').detach();
            }
        });
    });
</script>
</body>
</html>
