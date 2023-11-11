<?php
require 'functions.php';
//query untuk mengambil data dari database
$result = mysqli_query($conn, "SELECT * FROM `anime list`");
$anime = query("SELECT * FROM `anime list`");
?>

<!-- lat1 -->
<!DOCTYPE html>
<html>

<head>
    <title>MyAnimeList.net - Anime and Manga Database and Community</title>
</head>

<body>
    <h1> Anime List</h1>

    <a href="tambah.php">Add New Anime</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Action</th>
            <th>Image</th>
            <th>Anime Title</th>
            <th>Score</th>
            <th>Type</th>
            <th>Progress</th>
            <th>Studios</th>
            <th>Air Start</th>
            <th>Air End</th>
            <th>Rated</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($anime as $row) : ?>
        <tr>
            <td><?= $i;?></td>
            <td>
                <a href="edit.php?#=<?= $row["#"];?>">Edit</a> |
                <a href="hapus.php?#=<?= $row["#"];?> "onclick="return confirm('yes?');">Delete</a>
            </td>
            
            <td><img src = "image/<?= $row["Image"];?> " width = "50%"></td>
            <td><?= $row["Anime Title"];?></td>
            <td><?= $row["Type"];?></td>
            <td><?= $row["Score"];?></td>
            <td><?= $row["Progress"];?></td>
            <td><?= $row["Studios"];?></td>
            <td><?=$row["Air Start"];?></td>
            <td><?=$row["Air End"];?></td>
            <td><?=$row["Rated"];?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        
    </table>
</body>

</html>
