<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
require 'connect.php';

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET['id'];

    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
    $sql = "DELETE FROM showroom_mobil WHERE id_mobil = '$id'";

    // (4) Buatkan perkondisi jika eksekusi query berhasil
    if (mysqli_query($conn, $sql)) {
        header("Location: list_mobil.php");
    } else {
        // (5) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($conn);
?>