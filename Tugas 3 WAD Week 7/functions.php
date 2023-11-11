<?php
//koneksi ke database disini
$conn = mysqli_connect("localhost", "root", "", "myanimelist");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;
    $gambar = htmlspecialchars($data["Image"]);
    $anime_title = htmlspecialchars($data["Anime Title"]);
    $score = htmlspecialchars($data["Score"]);
    $type = htmlspecialchars($data["Type"]);
    $progress = htmlspecialchars($data["Progress"]);
    $studios = htmlspecialchars($data["Studios"]);
    $air_start = htmlspecialchars($data["Air Start"]);
    $air_end = htmlspecialchars($data["Air End"]);
    $rated = htmlspecialchars($data["Rated"]);

    //query insert data
    $query = "INSERT INTO `anime list` VALUES ('', '$gambar', '$anime_title', '$score', '$type', '$progress', '$studios', '$air_start', '$air_end', '$rated')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
    
}

function hapus($no) {
    global $conn;
    $sanitized_id = mysqli_real_escape_string($conn, $no);
    $query = "DELETE FROM `anime list` WHERE `#` = '$sanitized_id'";
    
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);
}

?>