<?php
    require('db.php');
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Life-is-Good</title>
    </head>
    <body>
        <div class="container-fluid">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view.php">View Records</a>
                </li>
            </ul>

            <div class="container-fluid" style="padding-top: 30px; ">
                <form method="post" action="insert.php">
                    <div class="input-group mb-3">
                        <span class="input-group-text">ISBN</span>
                        <input type="number" class="form-control" name="ISBN" aria-describedby="books-submit" placeholder="Enter ISBN: " required/> 
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Book Title</span>
                        <input type="text" class="form-control" name="TITLE" aria-describedby="books-submit" placeholder="Enter Title: " required/> 
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Year Published</span>
                        <input type="number" class="form-control" name="YEAR" aria-describedby="books-submit" placeholder="Enter Year: " required/> 
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Author</span>
                        <input type="text" class="form-control" name="AUTHOR" aria-describedby="books-submit" placeholder="Enter Author's name: " required/> 
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Material Type</span>
                        <input type="text" class="form-control" name="TYPE" aria-describedby="books-submit" placeholder="Enter Material type: " required/> 
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Publishing House</span>
                        <input type="text" class="form-control" name="PUBLISHING_HOUSE" aria-describedby="books-submit" placeholder="Enter Publishing house: " required/> 
                    </div>
                    <button class="btn btn-outline-primary" type="submit" id="books-submit">Submit</button>
                    <button class="btn btn-outline-danger" type="reset" id="books-submit">Clear</button>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>
