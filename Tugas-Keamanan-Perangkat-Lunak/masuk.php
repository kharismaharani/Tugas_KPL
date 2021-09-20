<?php
session_start();

if (!isset($_SESSION["login"])) {
    echo "<script>
    alert ('Silahkan login terlebih dahulu');
    window.location.href = 'homepage.php';
    </script>";
    exit;
}
require 'functions.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/styleindex.css">
    <title>Index</title>
</head>

<body>
    <!-- <a href="logout.php">Logout</a> -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <div style="color:#86340A ;">
                <h3><b>Tugas | Welcome</b></h3>
            </div>
            <div style="float: right;">
                <a href="logout.php"><button style="width:auto; background-color:#86340A">Keluar</button></a>

            </div>
        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>