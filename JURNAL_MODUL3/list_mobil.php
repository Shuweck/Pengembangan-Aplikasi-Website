<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <table class="table">
                <h1>List Mobil</h1>
                <tr>
                <th scope = "col">ID</th>
                <th scope = "col">Nama Mobil</th>
                <th scope = "col">Brand Mobil</th>
                <th scope = "col">Warna Mobil</th>
                <th scope = "col">Tipe Mobil</th>
                <th scope = "col">Harga Mobil</th>
                <th scope = "col">Aksi</th>
            </tr>
            

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $query = mysqli_query($conn, "SELECT * FROM showroom_mobil");

            // Buatlah kondisi jika data yang diambil ada isinya
            if($query){
                while($selects = mysqli_fetch_array($query)){

                
            ?>
            <tr>
                    <th scope="row"><?= $selects['id']?></th>
                    <td><?= $selects['nama_mobil']; ?></td>
                    <td><?= $selects['brand_mobil']; ?></td>
                    <td><?= $selects['warna_mobil']; ?></td>
                    <td><?= $selects['tipe_mobil']; ?></td>
                    <td><?= $selects['harga_mobil']; ?></td>
                    <td>
                        <button type="button" class="btn btn-success"><a href="form_detail_mobil.php">Ubah</a></button>
                    </td>
                    
                </tr>                
            <?php
                }
            }
            



            
            
            
            

            //<!--  **********************  1  **************************     -->

            
            







            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
