<?php
require 'functions.php';

//ambil data di URL
$no = $_GET["#"];
//query data anime berdasarkan no/#//
$anm = query("SELECT * FROM `anime list` WHERE `#` = $no")[0];

//cek apakah data berhasil ditambahkan atau tidak latihan 3
if (isset($_POST["submit"])) {
    

   

    //cek apakah data berhasil diedit atau tidak
    if (edit($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diedit!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diedit!');
                document.location.href = 'index.php';
            </script>
        ";
    }

}
?>
<!-- latihan 2 membuat form yang dapat di input ke dalam database -->
<!DOCTYPE html>
<html>
    <head>
        <title> Edit Anime </title>
    </head>
    <body>
        <h1> Edit Anime </h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="Image">Image : </label>
                    <input type="text" name="Image" id="Image" value="">
                </li>
                <li>
                    <label for="Anime Title">Anime Title : </label>
                    <input type="text" name="Anime Title" id="Anime Title" required>
                </li>
                <li>
                    <label for="Score">Score : </label>
                    <input type="text" name="Score" id="Score" required>
                </li>
                <li>
                    <label for="Type">Type : </label>
                    <input type="text" name="Type" id="Type" >
                </li>
                <li>
                    <label for="Progress">Progress : </label>
                    <input type="text" name="Progress" id="Progress" required>
                </li>
                <li>
                    <label for="Studios">Studios : </label>
                    <input type="text" name="Studios" id="Studios" >
                </li>
                <li>
                    <label for="Air Start">Air Start : </label>
                    <input type="text" name="Air Start" id="Air Start" required>
                </li>
                <li>
                    <label for="Air End">Air End : </label>
                    <input type="text" name="Air End" id="Air End" required>
                </li>
                <li>
                    <label for="Rated">Rated : </label>
                    <input type="text" name="Rated" id="Rated" >
                </li>
                <li>
                    <button type="submit" name="submit">Edit Anime</button>
                </li>