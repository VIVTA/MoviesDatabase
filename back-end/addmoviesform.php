<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>PSC - Staff : Add Movies</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h1>PSC - Staff Access : Add Movies</h1>
<hr>
<form action="actions/addmovies.php" method="POST" enctype="multipart/form-data">
        <table>
            <thead align="left">
                <th><label>Title*</label><br></th>
                <th><label>Year</label><br></th>
                <th><label>Genre(s)</label><br></th>
            </thead>
            <tbody id="add-movies">
                            <tr>
                    <td><input type="text" placeholder="Title" name="movie_title" required="required" maxlength="50"></td>
                    <td><input type="text" placeholder="Year" name="movie_year" size="4" maxlength="4"></td>
                    <td>
                        <table>
                            <tr>
                                <td><input type="checkbox" name="movie_genre[]" value="Action"> Action</td>
                                <td><input type="checkbox" name="movie_genre[]" value="Animated"> Animated</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="movie_genre[]" value="Comedy"> Comedy</td>
                                <td><input type="checkbox" name="movie_genre[]" value="Drama"> Drama</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="movie_genre[]" value="Romance"> Romance</td>
                                <td><input type="checkbox" name="movie_genre[]" value="SciFi"> SciFi</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        Poster: <input type="file" name="file" id="file"><br>
        <p class="caption">* Required</p>
        <input type="submit" value="Add Movies">
    </form>
</body>
</html>
