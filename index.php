<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">

<title>index</title>
</head>
<?php require_once "database/connection.php"; ?>
<body>
    <div class="container">
        <div class="row justify-content-center">   
            <?php 
                $dbc = db_connect();
                $sql = "SELECT * FROM movies";
                $result = mysqli_query($dbc, $sql);
                while($row = mysqli_fetch_array($result)){ ?>
                    <div class="col-sm-4 mt-4">
                        <div class="card">
                            
                            <img src="<?php echo $row ['4'] ?>" alt="" class="rounded-circle" style="height:50vh;">
                            </div>
                            <div class="card-body">
                            <h2 class="header-text"><?php echo $row['movie_title'];?></h2>

                                <p>Movie Rating is: <?php echo $row['movie_rating']; ?> </p>
                                <p>Releasing Date is: <?php echo $row['release_date']; ?> </p>
                                <p>Image: <?php echo $row['movie_img']; ?> </p>
                                
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-warning">Update</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </div>
                           
                    </div>
            <?php } ?>
        
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>