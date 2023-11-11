<?php
require 'functions.php';

//cek apakah data berhasil ditambahkan atau tidak latihan 3
if (isset($_POST["submit"])) {
    

   

    //cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
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
        <title> Add New Anime </title>
    </head>
    <body>
        <h1> Add New Anime </h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="Image">Image : </label>
                    <input type="text" name="Image" id="Image" >
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
                    <button type="submit" name="submit">Add Anime</button>
                </li>