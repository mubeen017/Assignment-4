<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Add Movie</title>
    </head>
    <?php require_once "database/connection.php";?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-center">Movies</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <form action="add_movie_script.php" method="post" enctype="multipart/form-data" >

                        <div class="form-group">
                            <label for="movie_title">Movie Title: </label>
                            <input type="text" name="movie_title" id="movie_title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="movie_rating">Movie Rating: </label>
                            <input type="number" name="movie_rating" id="movie_rating" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="release_date">Release Date: </label>
                            <input type="date" name="release_date" id="release_date" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="uploadFile">Movie Image: </label>
                            <input type="file" name="uploadFile" id="uploadFile" class="form-control-file" accept="image/*" >
                        </div>

                        <input type="submit" name="submit" value="Add Movie" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>