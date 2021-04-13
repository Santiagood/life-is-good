<?php
    require('db.php');
    $ISBN = $_POST['ISBN'];
    $TITLE = $_POST['TITLE'];
    $YEAR = $_POST['YEAR'];
    $AUTHOR = $_POST['AUTHOR'];
    $TYPE = $_POST['TYPE'];
    $PUBLISHING_HOUSE = $_POST['PUBLISHING_HOUSE'];

    $query = "INSERT INTO practicedb.books VALUES('$ISBN','$TITLE','$YEAR','$AUTHOR','$TYPE','$PUBLISHING_HOUSE')";
    if($mysqli->query($query)) {
        header('location: index.php');
    }
    else {
        echo "Failed";
    }
?>