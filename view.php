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
                    <a class="nav-link" aria-current="page" href="index.php">Main</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="view.php">View Records</a>
                </li>
            </ul>
        </div>
        
        <div class="container-fluid" style="padding-top: 30px;">
            <table class="table table-dark table-striped table-hover" style="text-align: center;">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ISBN</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">YEAR PUBLISHED</th>
                        <th scope="col">AUTHOR</th>
                        <th scope="col">MATERIAL TYPE</th>
                        <th scope="col">PUBLISHING HOUSE/ PUBLISHER</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query="SELECT * FROM practicedb.books";
                        $exec=$mysqli->query($query);
                        while($row = $exec->fetch_array()) {
                    ?>
                        <tr>
                            <td scope="row"><?= $row['ISBN'] ?></td>
                            <td scope="row"><?= $row['TITLE'] ?></td>
                            <td scope="row"><?= $row['YEAR_PUBLISHED'] ?></td>
                            <td scope="row"><?= $row['AUTHOR'] ?></td>
                            <td scope="row"><?= $row['MATERIAL_TYPE'] ?></td>
                            <td scope="row"><?= $row['PUBLISHER'] ?></td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>